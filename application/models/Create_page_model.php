<?php
class Create_page_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }


     public function set_page_image_name($page_id = 0,$file_name,$full_path)
    {

             $this->load->helper('url');
        $slug = url_title($this->input->post('page_title'), 'dash', TRUE);
        $data = array(
            'page_image_name'=>$file_name,
            'page_image_url'=>$full_path,
            'slug'=>$slug,
            'page_title'=>$this->input->post('page_title'),
            'page_content'=>$this->input->post('page_content'),
          //  'page_author'=>$this->input->post('page_author'),
           // 'page_date'=> date('M j, Y'),
           // 'page_status'=>"unpublished",
           

        );
        if ($page_id === 0)
        {
        	return $this->db->insert('create_page',$data);
        
        } else{
 //print_r ($ss_id); exit;
        $this->db->where('page_id',$page_id);
        return $this->db->update('create_page',$data);
    }
 
 }

 public function get_page_image_name(){
	{
       
    $query = $this->db->get_where('create_page');
    return $query->result_array();
    }
}



     public function get_page_image_byid($page_id = 0)
    {
        //echo "here";exit;
        if ($page_id === 0)
        {
            $query = $this->db->get('create_page');
            return $query->result_array();
        }
 //echo "here";
        $query = $this->db->get_where('create_page', array('page_id' => $page_id));
        return $query->row_array();
    }


 public function delete_page($page_id)
    {
        $this->db->where('page_id', $page_id);
        return $this->db->delete('create_page');
    }


public function get_page_content(){


        $this->db->select('*');
        $this->db->from('create_page');
        $this->db->where('slug',$this->uri->segment(3));
        $query=$this->db->get();

        return $query->result_array();

        }






/* function goes above here */
}

 

