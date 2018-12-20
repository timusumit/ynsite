<?php
class Contact_setup_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');

    }


    public function set_contact(){
    	$data=array(
    	'map_plugin'=>$this->input->post('map_plugin'),
    	'address'=>$this->input->post('address'),
    	'phone'=>$this->input->post('phone'),
    	'email'=>$this->input->post('email'),		

    	);

    
    		$this->db->where('cont_id',1);
    		return $this->db->update('contact_about',$data);
    	

    }

    public function get_contact(){
        $this->db->limit(1);
    	$query=$this->db->get_where('contact_about');

    	return $query->result_array();
    }
/* write above here */
}