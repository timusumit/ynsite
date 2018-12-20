<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Create_page extends Admin_controller{

	public function __construct(){
		parent::__construct();
		  $this->load->model('create_page_model');
		  $this->load->model('user_model');
		    $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
	}


public function index(){

	$data['create_page']=$this->create_page_model->get_page_image_name();
	$data['titlename']=$this->user_model->get_logged_user();
	$this->display('admin/create_page',$data);
}

/* for adding page */
public function do_upload()
        {



                $config['upload_path']          = './site_assets/uploads/page';
                $config['allowed_types']        = 'jpg|jpeg|png|gif|svg';
                $config['file_name']='page_image';


                $this->load->library('upload', $config);
                $file=$this->upload->do_upload('userfile');

                if ( ! $file )
                {


$test = $this->uri->segment(4);

if($test==0)
                    {
                        $page_id=0;
                     
                    }
                else {
                  
                   $page_id = $this->uri->segment(4);
  
                }

                        $create_page = $this->create_page_model->get_page_image_byid($page_id);
                        $filename=$create_page['page_image_name'];
                        $filepath=$create_page['page_image_url'];                       
                        $this->create_page_model->set_page_image_name($page_id,$filename,$filepath);
                        redirect('admin/create_page',$data);






                }
                else
                {

$test = $this->uri->segment(4);

if($test==0)
                    {
                        $page_id=0;
                     
                    }
                else {
                  
                   $page_id = $this->uri->segment(4);
  
                }
                        $create_page = $this->create_page_model->get_page_image_byid($page_id);
                        $old_file_path=$create_page['page_image_url'];

                        $data = array(
                            'file_name' => $this->upload->data('file_name'),
                            'full_path' => $this->upload->data('full_path'),
                    );                      
                       	$this->create_page_model->set_page_image_name($page_id,$data['file_name'],$data['full_path']);
                        unlink($old_file_path);
                        redirect('admin/create_page',$data);

                }
        }




      public function edit(){
            $this->do_upload();
         }


    public function delete()
        {
        $page_id = $this->uri->segment(4);
      //  echo $page_id;exit;
        if (empty($page_id))
        {
           // echo "here";
            show_404();
        }
        //  echo "i am here"; exit;      
        $create_page = $this->create_page_model->get_page_image_byid($page_id);
        $file_path=$create_page['page_image_url'];


//echo $file_path; exit;
if(is_file($file_path)){
        unlink($file_path);
        echo 'File  has been deleted';
      } else {
        echo 'Could not delete file does not exist';
      }
        $this->create_page_model->delete_page($page_id);        
        redirect( base_url() . 'admin/create_page');        
        }


/* write above here */
}
