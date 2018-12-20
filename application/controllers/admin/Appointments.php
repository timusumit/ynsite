<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Appointments extends Admin_controller{

	public function __construct(){
		parent::__construct();
		  $this->load->model('appointments_model');
		  $this->load->model('user_model');
	}

public function index()
{
	  $data['titlename']=$this->user_model->get_logged_user();
	$data['add_appointment']=$this->appointments_model->get_appointment();
	$this->display('admin/appointments',$data);
}


public function app_status(){
		$app_id=$this->uri->segment(4);
		$app_status=$this->uri->segment(5);


	if(empty($app_id)){
        show_404();
    }
    $this->appointments_model->set_app_status($app_id,$app_status);
    redirect('admin/appointments');

	}

/* write above here */
}