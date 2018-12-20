<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Vmi_setup extends Admin_controller{

	public function __construct(){
		parent::__construct();
		  $this->load->model('vmi_setup_model');
		  $this->load->model('user_model');
		    $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
	}


public function index(){
	$data['vmi_setup']=$this->vmi_setup_model->get_vmi();
	$data['titlename']=$this->user_model->get_logged_user();
	$this->display('admin/vmi_setup',$data);
}

public function add(){

		$this->vmi_setup_model->set_vmi();
		redirect('admin/vmi_setup');
	
}

/* write above here */
}
