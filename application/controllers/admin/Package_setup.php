<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Package_setup extends Admin_controller{

	public function __construct(){
		parent::__construct();
		  $this->load->model('package_setup_model');
		  $this->load->model('user_model');
		    $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
	}


public function index(){
	//$data['contact_about']=$this->package_setup_model->get_contact();
	$data['titlename']=$this->user_model->get_logged_user();
	$this->display('admin/create_package',$data);
}

public function add(){
	$this->form_validation->set_rules('map_plugin', 'Map Plugin', 'required');
	$this->form_validation->set_rules('address', 'Address', 'required');
	$this->form_validation->set_rules('email', 'Email', 'required');
	$this->form_validation->set_rules('phone', 'Phone', 'required');
	if($this->form_validation->run()===FALSE){
		redirect('admin/package_setup');
	}else{
		$this->package_setup_model->set_contact();
		redirect('admin/package_setup');
	}

}

/* write above here */
}
