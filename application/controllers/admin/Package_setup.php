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
	$data['package_setup']=$this->package_setup_model->get_package();
	$data['titlename']=$this->user_model->get_logged_user();
	$this->display('admin/create_package',$data);
}

public function add(){
	$this->form_validation->set_rules('package_name', 'Package Name', 'required');
	$this->form_validation->set_rules('main_price', 'Main Price', 'required');
	$this->form_validation->set_rules('disk_space', 'Disk Space', 'required');
	$this->form_validation->set_rules('bandwidth', 'bandwidth', 'required');
	$this->form_validation->set_rules('extra_feature', 'Extra Feature', 'required');
	$this->form_validation->set_rules('renew_price', 'Renew Price', 'required');
	if($this->form_validation->run()===FALSE){
		redirect('admin/package_setup');
	}else{
		$this->package_setup_model->set_package();
		redirect('admin/package_setup');
	}

}

/* write above here */
}
