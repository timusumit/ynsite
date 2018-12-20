<?php
class Create_post_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }


     public function set_post_image_name($post_id = 0,$file_name,$full_path)
    {
        //echo $file_name;exit;

             $this->load->helper('url');
        $slug = url_title($this->input->post('post_title'), 'dash', TRUE);
        $data = array(
            'post_image_name'=>$file_name,
            'post_image_url'=>$full_path,
            'slug'=>$slug,
            'post_title'=>$this->input->post('post_title'),
            'post_content'=>$this->input->post('post_content'),
            'post_author'=>$this->input->post('post_author'),
            'post_date'=> date('M j Y'),
            'post_type'=>$this->input->post('post_type'),
            'event_location'=>$this->input->post('event_location'),
           

        );
        if ($post_id === 0)
        {
        	return $this->db->insert('create_post',$data);
        
        } else{
 //print_r ($ss_id); exit;
        $this->db->where('post_id',$post_id);
        return $this->db->update('create_post',$data);
    }
 
 }

 public function get_post_image_name(){
	{
       
    $query = $this->db->get_where('create_post');
    return $query->result_array();
    }
}


public function get_recent_post(){
   $query=$this->db->query('SELECT * FROM `create_post` ORDER BY `create_post`.`post_date` ASC limit 4');
   return $query->result_array();
}



     public function get_post_image_byid($post_id = 0)
    {
        //echo "here";exit;
        if ($post_id === 0)
        {
            $query = $this->db->get('create_post');
            return $query->result_array();
        }
 //echo "here";
        $query = $this->db->get_where('create_post', array('post_id' => $post_id));
        return $query->row_array();
    }


 public function delete_post($post_id)
    {
        $this->db->where('post_id', $post_id);
        return $this->db->delete('create_post');
    }


public function get_post_content(){


        $this->db->select('*');
        $this->db->from('create_post');
        $this->db->where('slug',$this->uri->segment(3));
        $query=$this->db->get();

        return $query->result_array();

        }
public function get_events_list(){
        $this->db->select('*');
        $this->db->from('create_post');
        $this->db->where('post_type','events');
        $this->db->limit(4);
        $query=$this->db->get();
        return $query->result_array();

}

public function get_news_list(){
$this->db->select('*');
        $this->db->from('create_post');
       $this->db->where('post_type','news');
        //$this->db->where('slug',$this->uri->segment(3));
        $this->db->limit(4);
        $query=$this->db->get();

       // print_r($query);exit;
        return $query->result_array();
}

public function get_news(){
$slug=$this->uri->segment(3);

    $where = array(
               'post_type' =>'news',
               'slug' => $slug
            );
        $this->db->select('*');
        $this->db->from('create_post');
        $this->db->where($where);
        //$this->db->where('slug',$this->uri->segment(3));
        $query=$this->db->get();
       // print_r($query);exit;
        return $query->result_array();

}
public function get_events(){
$slug=$this->uri->segment(3);

    $where = array(
               'post_type' =>'events',
               'slug' => $slug
            );
        $this->db->select('*');
        $this->db->from('create_post');
        $this->db->where($where);
        //$this->db->where('slug',$this->uri->segment(3));
        $query=$this->db->get();
       // print_r($query);exit;
        return $query->result_array();

}





/* function goes above here */
}


