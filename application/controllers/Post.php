<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
   public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('inquiry_model');
        $this->load->model('contact_setup_model');
        $this->load->model('create_page_model');
        $this->load->model('menu_setup_model');
        $this->load->model('slider_setup_model');
        $this->load->model('create_post_model');

    }

    public function display($view,$data){
    	$data['contact_setup']=$this->contact_setup_model->get_contact();
        $data['menu_setup']=$this->menu_setup_model->get_page_from_menu();
        $data['submenu']=$this->menu_setup_model->get_submenu_page();
        $data['slider_setup']=$this->slider_setup_model->get_slider_image_name();
        $data['get_events']=$this->create_post_model->get_events();
    	$this->load->view('site_templates/header',$data);
    	$this->load->view('site_templates/navigation',$data);
    	$this->load->view($view,$data);
    	$this->load->view('site_templates/footer');

    }
    public function index(){
      //  echo $this->uri->segment(2);
       // echo "ee";
    }
    public function news(){
        $data['get_news']=$this->create_post_model->get_news();
        $this->display('news',$data);
    }

    public function events(){
        $data['get_events']=$this->create_post_model->get_events();
        $this->display('events',$data);
    }
}
