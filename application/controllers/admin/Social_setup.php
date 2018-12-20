<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Social_setup extends Admin_controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('social_setup_model');
		$this->load->model('user_model');
		$this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
	}
public function index(){
	$data['social_setup']=$this->social_setup_model->get_social();
	$data['titlename']=$this->user_model->get_logged_user();
	$this->display('admin/social_setup',$data);
}

public function add(){

		$this->social_setup_model->set_social();
		redirect('admin/social_setup');
	
}

/* write above here */
}