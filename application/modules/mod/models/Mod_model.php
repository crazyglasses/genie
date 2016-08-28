
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('date');
    }
    function getalltickets()
    {

        $data = $this->db->get('ticket')->result_array();
        return $data;
    }
    function getmodinfo($id)
    {
    	$data = $this->db->get_where('mod',array('mid'=>$id))->result_array();
    	return $data;
    }
    function getstatus()
    {
        $data = $this->db->get('issues')->result_array();
        return $data;
    }
}