<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Submenu_setup extends Admin_controller{


	public function __construct(){
		parent::__construct();
		  $this->load->model('submenu_setup_model');
		  $this->load->model('user_model');
		  $this->load->model('create_page_model');
		  $this->load->helper(array('form', 'url'));
		  $this->load->model('menu_setup_model');
        $this->load->library(array('session', 'form_validation'));
	}


public function index(){
	$data['submenu_setup']=$this->submenu_setup_model->get_menu();
	$data['submenu']=$this->menu_setup_model->get_submenu_page();
	$data['menu_setup']=$this->menu_setup_model->get_page_menu_sms();
	$data['create_page']=$this->create_page_model->get_page_image_name();
	$data['titlename']=$this->user_model->get_logged_user();
	$this->display('admin/submenu_setup',$data);
}

public function add(){
	$this->form_validation->set_rules('sms_page_id', 'Page', 'required');
	$this->form_validation->set_rules('sms_ms_id','Parent Menu','required');
	$this->form_validation->set_rules('sms_title', 'Menu Title', 'required');
	$this->form_validation->set_rules('sms_order', 'Order', 'required');
	//$this->form_validation->set_rules('phone', 'Phone', 'required');
	if($this->form_validation->run()===FALSE){
		redirect('admin/submenu_setup');
	}else{
		$this->submenu_setup_model->set_submenu();
		redirect('admin/submenu_setup');
	}

}

public function delete(){
	$sms_id=$this->uri->segment(4);
	if(empty($sms_id)){
		show_404();
	}
	$this->submenu_setup_model->delete_submenu($sms_id);
	redirect('admin/submenu_setup');
}

}
?>