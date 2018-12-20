<?php
class User extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session', 'form_validation'));
        $this->load->model('user_model');
        $this->load->helper(array('form', 'url'));
       
    }
 
    public function index()
    {
        $this->register();
    }
    
    public function register()
    {
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required|min_length[3]|max_length[50]');
       /* $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[50]');*/
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');
        
        $data['title'] = 'Register';
        
        if ($this->form_validation->run() === FALSE)
        {            
           $this->load->view('admin_templates/header', $data);
            $this->load->view('user/register');
            $this->load->view('admin_templates/footer');
 
        }
        else
        { 
            if ($this->user_model->set_user())
            {                             
                $this->session->set_flashdata('msg_success','Registration Successful!');
                redirect('user/login');            
            }
            else
            {                
                $this->session->set_flashdata('msg_error','Error! Please try again later.');
                redirect('user/register');
            }
        }
    }
    
    public function login()
    {        
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|md5');        
        
        $data['title'] = 'Login';
        
        if ($this->form_validation->run() === FALSE)
        {            
            $this->load->view('admin_templates/header', $data);
            $this->load->view('user/login');
            $this->load->view('admin_templates/footer');
 
        }
        else
        { 
            if ($user = $this->user_model->get_user_login($email, $password))
            {   
                $this->session->set_userdata('firstname',$firstname);
                $this->session->set_userdata('email', $email);
                $this->session->set_userdata('user_id', $user['id']);
                $this->session->set_userdata('is_logged_in', true);
                
                
                $this->session->set_flashdata('msg_success','Login Successful!');
                redirect('admin');                
            }
            else
            {
                $this->session->set_flashdata('msg_error','Login credentials does not match!');                
                $currentClass = $this->router->fetch_class(); // class = controller
                $currentAction = $this->router->fetch_method(); // action = function             
                redirect("$currentClass/$currentAction");
            }
        }
    }



    public function changepassword(){   
 $oldpassword = $this->input->post('old_password');
            $newpassword= $this->input->post('new_password');
            $newcpassword=$this->input->post('cnew_password');

            $data=array();

        if ($this->session->userdata('is_logged_in')) {
            $this->load->view('admin_templates/header');
         
         if($_SERVER['REQUEST_METHOD']=='POST'){
              if($newpassword==$newcpassword){

               $ret= $this->user_model->change_pwd();

                   redirect('user/login');
              }
              else{

                   $data['error_change']="Password didnt Match!";
          }
        }
             $this->load->view('admin_templates/header');
             $this->load->view('user/changepassword',$data);
             $this->load->view('admin_templates/footer');
        
        }
        else{

            echo "Not logged in";
            redirect('admin');
        }

    }


    
    public function logout()
    {    
        if ($this->session->userdata('is_logged_in')) {
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('is_logged_in');
            $this->session->unset_userdata('user_id');            
        }
        redirect('admin');
    }    
}