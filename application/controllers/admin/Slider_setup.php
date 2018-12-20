<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Slider_setup extends Admin_controller{

	public function __construct(){
		parent::__construct();
		  $this->load->model('slider_setup_model');
		  $this->load->model('user_model');
		    $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
	}


public function do_upload()
        {



                $config['upload_path']          = './site_assets/uploads/slider';
                $config['allowed_types']        = 'jpg|jpeg|png';
                $config['file_name']='slider';


                $this->load->library('upload', $config);
                $file=$this->upload->do_upload('userfile');


                $uploadedImage = $this->upload->data();
   //    echo $uploadedImage['file_name'];exit;
        $this->resizeImage($uploadedImage['file_name']);

                if ( ! $file )
                {

                        $error = array('error' => $this->upload->display_errors());
                 //   echo "i am still here"; exit;
                        redirect('admin/slider_setup', $error);

                }
                else
                {

//$this->uri->segment(4) === FALSE;
$test = $this->uri->segment(4);
//echo $test; exit;
if($test==0)
                    {
                        $ss_id=0;
                      // echo " i am here from add"; exit;
                    }
                else {
                    //echo "i am here from edit"; exit;
                   $ss_id = $this->uri->segment(4);
                    
                  //  echo "i am here from edit";exit;

                }


                //    echo $this->uri->segmet(4); exit;
                   // echo isset($ss_id); exit;
                	//$ss_id = $this->uri->segmet(4);
                  /* if(!isset())
                    {
                        $ss_id=0;
                       echo " i am here from add"; exit;
                    }
                else {
                    echo "i am here from edit"; exit;
                    $ss_id=$this->uri->segmet(4);
                  //  echo "i am here from edit";exit;

                }*/


                        $data = array(
                            'file_name' => $this->upload->data('file_name'),
                            'full_path' => $this->upload->data('full_path'),
                    );     
                  //  print_r($data);exit;                  
                       	$this->slider_setup_model->set_slider_name($ss_id,$data['file_name'],$data['full_path']);
                        redirect('admin/slider_setup',$data);

                }
        }


         public function edit(){
            $this->do_upload();
        $ss_id = $this->uri->segment(4);
        
        if (empty($ss_id))
        {
            echo "i two";exit;
            show_404();
        }
         $this->load->helper('form');
        $this->load->library('form_validation');

    $data['sls'] = $this->slider_setup_model->get_slider_image_byid($ss_id);
    $titlename=$data['sls']['slider_img_name'];
    $data['slider_setup'] = $this->slider_setup_model->get_slider_image_name();
//echo "i reached here"; exit;
           // $this->slider_setup_model->set_slider_name($ss_id,$titlename);

            redirect('admin/slider_setup');
         }


    public function delete()
        {
        $slider_id = $this->uri->segment(4);
        
        if (empty($slider_id))
        {
            show_404();
        }
        //  echo "i am here"; exit;      
        $slider_setup = $this->slider_setup_model->get_slider_image_byid($slider_id);
        $file_path=$slider_setup['slider_image_url'];


//echo $file_path; exit;
if(is_file($file_path)){
        unlink($file_path);
        echo 'File  has been deleted';
      } else {
        echo 'Could not delete file does not exist';
      }
  

        $this->slider_setup_model->delete_slider($slider_id);        
        redirect( base_url() . 'admin/slider_setup');        
        }

public function index(){
	$data['slider_setup']=$this->slider_setup_model->get_slider_image_name();
	$data['titlename']=$this->user_model->get_logged_user();
	$this->display('admin/slider_setup',$data);
}


 public function resizeImage($filename)
   {
   // echo "here";exit;
      $source_path = $_SERVER['DOCUMENT_ROOT'] . '/tucirweb/site_assets/uploads/slider/'. $filename;
    //  echo $source_path;exit;
      $target_path = $_SERVER['DOCUMENT_ROOT'] . '/tucirweb/site_assets/uploads/slider/'.$filename;
    //  echo $target_path;exit;
      $config_manip = array(
          'image_library' => 'gd2',
          'source_image' => $source_path,
          'new_image' => $target_path,
          'maintain_ratio' => TRUE,
          'create_thumb' => TRUE,
          'thumb_marker' => '',
          'width' => 1350,
          'height' => 500
      );
  //  print_r($config_manip);exit;


      $this->load->library('image_lib', $config_manip);
      /*echo "here";exit;*/
   //   $this->image_lib->resize();
      if (!$this->image_lib->resize()) {
          echo $this->image_lib->display_errors();
      }


     $this->image_lib->clear();
   }





/* write above here */
}