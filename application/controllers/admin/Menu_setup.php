<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Menu_setup extends Admin_controller{


	public function __construct(){
		parent::__construct();
		  $this->load->model('menu_setup_model');
		  $this->load->model('user_model');
		  $this->load->model('create_page_model');
		    $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
	}


public function index(){
	$data['menu_setup']=$this->menu_setup_model->get_menu();
	$data['create_page']=$this->create_page_model->get_page_image_name();
	$data['titlename']=$this->user_model->get_logged_user();
	$this->display('admin/menu_setup',$data);
}

public function add(){
	$this->form_validation->set_rules('ms_page_id', 'Page', 'required');
	$this->form_validation->set_rules('ms_title', 'Menu Title', 'required');
	$this->form_validation->set_rules('ms_order', 'Order', 'required');
	//$this->form_validation->set_rules('phone', 'Phone', 'required');
	if($this->form_validation->run()===FALSE){
		redirect('admin/menu_setup');
	}else{
		$this->menu_setup_model->set_menu();
		redirect('admin/menu_setup');
	}

}

public function delete(){
	$ms_id=$this->uri->segment(4);
	if(empty($ms_id)){
		show_404();
	}
	$this->menu_setup_model->delete_menu($ms_id);
	redirect('admin/menu_setup');
}

}
