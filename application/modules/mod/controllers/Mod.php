<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mod extends MX_Controller
{
	function __construct()
	{
		parent::__construct(); 
		$this->load->library('auth/ion_auth');
		$this->load->model('mod_model');
		$this->load->helper(array('form', 'url'));
		if(!$this->ion_auth->logged_in())
			redirect('/auth/login/','refresh');
		if(!$this->ion_auth->in_group(3))
			redirect('/auth/login/','refresh');
    $this->info = $this->mod_model->getmodinfo($this->ion_auth->get_user_id());
      }
    function _render_page($view,$data=null)
 {
	
	$this->load->view('dash', $data);
	$this->load->view($view, $data);
	$this->load->view('footer', $data);
 }

 function index()
 {
 	$this->_render_page('sample');
 }
 function tickets($flag=0)
 {
  $pass['data'] = $this->mod_model->getalltickets();
  $tag = $this->info[0]['tags'];
  $arrayobj = new ArrayObject();
  foreach($pass['data'] as $row){
    $tags = explode(',',$row['tags']);
    $is_present = array_search($tag,$tags);

    if($is_present>-1){
      if($flag==0){
      $arrayobj->append($row);
    }else{
      if($row['status']==0){
        $arrayobj->append($row);
      }
    }
    }
  }
  $pass['data'] = $arrayobj;
  $pass['status'] =$this->mod_model->getstatus();
  $this->_render_page('alltickets',$pass);
 }
 function update($id){
    $pass['message'] = $this->input->post('message_'.$id);
    $pass['status'] = $this->input->post('status_'.$id);
    $pass['mod_priority'] = $this->input->post('pri_'.$id);
    $pass['iid'] = $id;
    $this->mod_model->update_ticket($pass);
    print_r("Updated");
    redirect('/mod/tickets');
    

 }
 



}