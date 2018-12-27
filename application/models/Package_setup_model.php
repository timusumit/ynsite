<?php
class Package_setup_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');

    }


    public function set_package(){
    	$data=array(
    	'package_name'=>$this->input->post('package_name'),
    	'main_price'=>$this->input->post('main_price'),
    	'disk_space'=>$this->input->post('disk_space'),
    	'bandwidth'=>$this->input->post('bandwidth'),
        'extra_feature'=>$this->input->post('extra_feature'),  
        'renew_price'=>$this->input->post('renew_price'),    		

    	);

    
    		//$this->db->where('cont_id',1);
    		return $this->db->insert('package_setup',$data);
    	

    }

    public function get_package(){
        $this->db->limit(1);
    	$query=$this->db->get_where('package_about');

    	return $query->result_array();
    }
/* write above here */
}