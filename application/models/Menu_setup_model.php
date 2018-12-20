<?php
class Menu_setup_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');

    }


    public function set_menu($ms_id=0){
        $data=array(
        'ms_page_id'=>$this->input->post('ms_page_id'),
        'ms_title'=>$this->input->post('ms_title'),
        'ms_order'=>$this->input->post('ms_order'),
        'ms_has_sub'=>$this->input->post('ms_has_sub'),
        //'email'=>$this->input->post('email'),     

        );

        if($ms_id==0){
            return $this->db->insert('menu_setup',$data);
        }
        else{
            $this->db->where('ms_id',$ms_id);
            return $this->db->update('menu_setup',$data);
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

    public function get_submenu_page(){
       $query=$this->db->query('SELECT * FROM sub_menu_setup JOIN create_page on sms_page_id=page_id');
       return $query->result_array();
    }

     public function get_page_menu_sms(){
        $query=$this->db->query('SELECT * FROM menu_setup');
        return $query->result_array();
    }

    public function delete_menu($ms_id){
         $this->db->where('ms_id', $ms_id);
        return $this->db->delete('menu_setup');
    }
/* write above here */
}