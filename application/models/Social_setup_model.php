<?php
class Social_setup_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');

    }


    public function set_social(){
    	$data=array(
    	'facebook'=>$this->input->post('facebook'),
    	'twitter'=>$this->input->post('twitter'),
    	'youtube'=>$this->input->post('youtube'),
    	);
      // print_r($data);exit;

    
    
    		$this->db->where('social_id',1);
    		return $this->db->update('social_setup',$data);
    	

    }

    public function get_social(){
        $this->db->limit(1);
    	$query=$this->db->get_where('social_setup');

    	return $query->result_array();
    }
/* write above here */
}