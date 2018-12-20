<?php
class Inquiry_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }


public function get_inquiry(){
	$this->db->select('*');
	$this->db->from('inquiry');
	$query=$this->db->get();
	return $query->result_array();
}


public function set_inquiry(){
$data=array(
'name'=>$this->input->post('name'),
'email'=>$this->input->post('email'),
'subject'=>$this->input->post('subject'),
'message'=>$this->input->post('message'),
);
return $this->db->insert('inquiry',$data);
}

public function delete_inquiry($inquiry_id){
	  $this->db->where('inquiry_id', $inquiry_id);
       return $this->db->delete('inquiry');
}
/* write above here */
}
