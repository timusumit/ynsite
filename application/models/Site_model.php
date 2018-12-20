<?php
class Site_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
      
    }

    public function confirm_appointment(){
    	$data=array(
    		'firstname'=>$this->input->post('firstname'),
    		'email'=>$this->input->post('email'),
    		'date'=>$this->input->post('date'),
    		'phone'=>$this->input->post('phone'),
    		'app_status'=>$this->input->post('app_status'),

    	);
    	return $this->db->insert('add_appointment',$data);

    }

/* write above here */


}
