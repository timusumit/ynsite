<?php
class Submenu_setup_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');

    }


    public function set_submenu($sms_id=0){
    	$data=array(
    	'sms_page_id'=>$this->input->post('sms_page_id'),
        'sms_ms_id'=>$this->input->post('sms_ms_id'),
    	'sms_title'=>$this->input->post('sms_title'),
    	'sms_order'=>$this->input->post('sms_order'),
    	//'email'=>$this->input->post('email'),		

    	);

    	if($sms_id==0){
    		return $this->db->insert('sub_menu_setup',$data);
    	}
    	else{
    		$this->db->where('sms_id',$sms_id);
    		return $this->db->update('sub_menu_setup',$data);
    	}

    }

    public function get_menu(){
        $this->db->limit(4);
    	$query=$this->db->get_where('menu_setup');

    	return $query->result_array();
    }

    public function get_page_from_menu(){
        $query=$this->db->query('select *from create_page join menu_setup on page_id= ms_page_id');
        return $query->result_array();
    }

    public function delete_submenu($sms_id){
         $this->db->where('sms_id', $sms_id);
        return $this->db->delete('sub_menu_setup');
    }
/* write above here */
}