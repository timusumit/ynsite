<?php
class Booking_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');

    }


   
  
    
    public function get_package_by_id($package_id){
        $this->db->where('package_id',$package_id);
    	$this->db->select('package_name');
        $query = $this->db->get('package_setup');
    	return $query->result();

    }

    public function add_booking($booking_id){
        //echo $booking_id;exit;
        $data['package_title']=$this->get_package_by_id($booking_id);
      // echo $package_name;
      foreach($package_title as $pd):
        echo $pd['package_name'];
    endforeach;
        

    }
   
/* write above here */
}