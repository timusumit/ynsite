<?php
class Vmi_setup_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');

    }


    public function set_vmi(){
    	$data=array(
    	'vision'=>$this->input->post('vision'),
    	'mission'=>$this->input->post('mission'),
    	'introduction'=>$this->input->post('introduction'),
    	);
      // print_r($data);exit;

    
    
    		$this->db->where('vmi_id',1);
    		return $this->db->update('vmi_setup',$data);
    	

    }

    public function get_vmi(){
        $this->db->limit(1);
    	$query=$this->db->get_where('vmi_setup');

    	return $query->result_array();
    }
/* write above here */
}