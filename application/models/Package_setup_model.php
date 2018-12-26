<?php
class Package_setup_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');

    }


    public function set_package(){
    	$data=array(
    	'map_plugin'=>$this->input->post('map_plugin'),
    	'address'=>$this->input->post('address'),
    	'phone'=>$this->input->post('phone'),
    	'email'=>$this->input->post('email'),		

    	);

    
    		$this->db->where('cont_id',1);
    		return $this->db->update('package_about',$data);
    	

    }

    public function get_package(){
        $this->db->limit(1);
    	$query=$this->db->get_where('package_about');

    	return $query->result_array();
    }
/* write above here */
}