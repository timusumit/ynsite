<?php
class Appointments_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }


public function get_appointment(){
	$this->db->select('*');
	$this->db->from('add_appointment');
	$query=$this->db->get();
	return $query->result_array();
}


public function set_app_status($app_id,$app_status){
$data=array(
'app_status'=>$app_status,
);
$this->db->where('app_id',$app_id);
return $this->db->update('add_appointment',$data);
}
/* write above here */
}
