<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('date');
    }
    function getticketinfo($id){
    	$data = $this->db->get_where('ticket',array('iid'=>$id))->result_array();
    	$data['issuer'] = $this->db->select('first_name')->where('id',$data[0]['uid'])->get('users')->result_array();
    	$data['issuer'] = $data['issuer'][0]['first_name'];
    
    	return $data;
    }
    function getcomments($id){
    	$dataobj = $this->db->get_where('comments',array('iid'=>$id));
    	$data = $dataobj->result_array();    
    	for($i=0;$i<$dataobj->num_rows();$i++){
    	$data[$i]['commenter'] = $this->db->select('first_name')->where('id',$data[$i]['id'])->get('users')->result_array();
    	}
		return $data;
	}
    function addcomment($data){
        $this->db->insert('comments',$data);
    }
    function postticket($data){
        if($this->db->insert('ticket',$data))
            return 1;
        else return 0;
    }
    function mytickets($id)
    {
        $data = $this->db->get_where('ticket',array('uid'=>$id))->result_array();
        return $data;
    }
}
