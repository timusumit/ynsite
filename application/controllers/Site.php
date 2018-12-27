<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

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
         $this->load->model('gallery_setup_model');
        $this->load->model('create_post_model');
        $this->load->model('social_setup_model');
        $this->load->model('services_setup_model');
        $this->load->helper('text');
        $this->load->model('package_setup_model');
        $this->load->model('booking_model');
    }

	

	public function display($view,$data){
		$data['contact_setup']=$this->contact_setup_model->get_contact();
		$data['menu_setup']=$this->menu_setup_model->get_page_from_menu();
	 	$data['submenu']=$this->menu_setup_model->get_submenu_page();
	 	$data['slider_setup']=$this->slider_setup_model->get_slider_image_name();
	 	$data['gallery_setup']=$this->gallery_setup_model->get_gallery_image_name();
	 	$data['get_news']=$this->create_post_model->get_news();
	 	$data['get_news_list']=$this->create_post_model->get_news_list();
	 	$data['get_events_list']=$this->create_post_model->get_events_list();
	 	$data['social_setup']=$this->social_setup_model->get_social();
	 	$data['services_setup']=$this->services_setup_model->get_services();
	 	$data['package_setup']=$this->package_setup_model->get_package();
		$this->load->view('site_templates/header.php');
		$this->load->view('site_templates/navigation.php',$data);
		$this->load->view($view,$data);
		$this->load->view('site_templates/footer.php');

	}

	public function index()
	{
		//$data['page_description']='Home';
		$data['contact_setup']=$this->contact_setup_model->get_contact();
		$this->display('home',$data);
		/*$this->load->view('site_templates/header');
		$this->load->view('site_templates/navigation');
		$this->load->view('home');
		$this->load->view('site_templates/footer');*/

	}

	public function contact(){
		$data['page_description']='Concat Us';
		/*$data['contact_setup']=$this->contact_setup_model->get_contact();*/
		$this->display('pages/contact',$data);
	}

	public function gallery(){
		$data['page_description']='Gallery';
		$this->display('pages/gallery',$data);
	}

	public function add_inquiry(){
    $this->inquiry_model->set_inquiry();
   	$this->session->set_flashdata('success_contact', 'Message Send Successfully.');
    redirect('site/#contact');

	}
	public function page()

	{
		$this->load->view('site/page');
	}

	public function book_package(){
		$booking_id=$this->uri->segment(3);
		$this->booking_model->add_booking($booking_id);
		//redirect('site');
	}
}
