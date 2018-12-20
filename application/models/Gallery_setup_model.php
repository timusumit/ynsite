<?php
class Gallery_setup_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }


     public function set_gallery_name($gallery_id = 0,$file_name,$full_path)
    {
       // echo "here";exit;

             $this->load->helper('url');
 
        $data = array(
            'gallery_image_name'=>$file_name,
            'gallery_image_url'=>$full_path,
            //'primary_gallery_title'=>$this->input->post('primary_gallery_title'),
            'gallery_title'=>$this->input->post('gallery_title'),
            'gallery_subtitle'=>$this->input->post('gallery_subtitle'),
            /*'gallery_btn_text'=>$this->input->post('gallery_btn_text'),
            'gallery_btn_link'=>$this->input->post('gallery_btn_link'),
*/


        );
        if ($gallery_id === 0)
        {
        	return $this->db->insert('gallery_setup',$data);
        
        } else{
 //print_r ($ss_id); exit;
        $this->db->where('gallery_id',$gallery_id);
        return $this->db->update('gallery_setup',$data);
    }
 
 }

 public function get_gallery_image_name(){
	{
       
    $query = $this->db->get_where('gallery_setup');
    return $query->result_array();
    }
}



     public function get_gallery_image_byid($gallery_id = 0)
    {
        //echo "here";exit;
        if ($gallery_id === 0)
        {
            $query = $this->db->get('gallery_setup');
            return $query->result_array();
        }
 //echo "here";
        $query = $this->db->get_where('gallery_setup', array('gallery_id' => $gallery_id));
        return $query->row_array();
    }


 public function delete_gallery($gallery_id)
    {
        $this->db->where('gallery_id', $gallery_id);
        return $this->db->delete('gallery_setup');
    }









/* function goes above here */
}

 

