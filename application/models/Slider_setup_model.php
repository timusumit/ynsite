<?php
class Slider_setup_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }


     public function set_slider_name($slider_id = 0,$file_name,$full_path)
    {
       // echo "here";exit;

             $this->load->helper('url');
 
        $data = array(
            'slider_image_name'=>$file_name,
            'slider_image_url'=>$full_path,
            //'primary_slider_title'=>$this->input->post('primary_slider_title'),
            'slider_title'=>$this->input->post('slider_title'),
            'slider_subtitle'=>$this->input->post('slider_subtitle'),
            /*'slider_btn_text'=>$this->input->post('slider_btn_text'),
            'slider_btn_link'=>$this->input->post('slider_btn_link'),
*/


        );
        if ($slider_id === 0)
        {
        	return $this->db->insert('slider_setup',$data);
        
        } else{
 //print_r ($ss_id); exit;
        $this->db->where('slider_id',$slider_id);
        return $this->db->update('slider_setup',$data);
    }
 
 }

 public function get_slider_image_name(){
	{
       
    $query = $this->db->get_where('slider_setup');
    return $query->result_array();
    }
}



     public function get_slider_image_byid($slider_id = 0)
    {
        //echo "here";exit;
        if ($slider_id === 0)
        {
            $query = $this->db->get('slider_setup');
            return $query->result_array();
        }
 //echo "here";
        $query = $this->db->get_where('slider_setup', array('slider_id' => $slider_id));
        return $query->row_array();
    }


 public function delete_slider($slider_id)
    {
        $this->db->where('slider_id', $slider_id);
        return $this->db->delete('slider_setup');
    }









/* function goes above here */
}

 

