<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Services_setup extends Admin_controller{

	public function __construct(){
		parent::__construct();
		  $this->load->model('services_setup_model');
		  $this->load->model('user_model');
		    $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
	}


public function index(){
	$data['services_setup']=$this->services_setup_model->get_services();
	$data['titlename']=$this->user_model->get_logged_user();
	$this->display('admin/services_setup',$data);
}

public function add(){
	$this->form_validation->set_rules('service_title', 'Service Title', 'required');
	$this->form_validation->set_rules('service_content', 'Service Content', 'required');

	if($this->form_validation->run()===FALSE){
		echo "hello";exit;
		redirect('admin/services_setup');
	}else{
		$this->services_setup_model->set_services();
		redirect('admin/services_setup');
	}

}

public function edit(){
$service_id=$this->uri->segment(4);
if(empty($service_id)){
	show_404();
}
$this->services_setup_model->set_services($service_id);
redirect('admin/services_setup');

}

public function delete(){
	$service_id=$this->uri->segment(4);
	if(empty($service_id)){
		show_404();
	}
	$this->services_setup_model->delete_services($service_id);
	redirect('admin/services_setup');	
}

/* write above here */
}
