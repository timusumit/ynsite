<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Gallery_setup extends Admin_controller{

	public function __construct(){
		parent::__construct();
		  $this->load->model('gallery_setup_model');
		  $this->load->model('user_model');
		    $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
	}


public function do_upload()
        {



                $config['upload_path']          = './site_assets/uploads/gallery';
                $config['allowed_types']        = 'jpg|jpeg|png';
                $config['file_name']='gallery';
                $this->load->library('upload', $config);
                $file=$this->upload->do_upload('userfile');
                $uploadedImage = $this->upload->data();
                $this->resizeImage($uploadedImage['file_name']);
                if ( ! $file )
                {
                    $error = array('error' => $this->upload->display_errors());
                    redirect('admin/gallery_setup', $error);

                }
                else
                {
                  $test = $this->uri->segment(4);
                if($test==0)
                    {
                        $ss_id=0;
                    }
                else {
                   $ss_id = $this->uri->segment(4);
                      }

                    $data = array(
                            'file_name' => $this->upload->data('file_name'),
                            'full_path' => $this->upload->data('full_path'),
                    );                  
                       	$this->gallery_setup_model->set_gallery_name($ss_id,$data['file_name'],$data['full_path']);
                        redirect('admin/gallery_setup',$data);

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

    $data['sls'] = $this->gallery_setup_model->get_gallery_image_byid($ss_id);
    $titlename=$data['sls']['gallery_img_name'];
    $data['gallery_setup'] = $this->gallery_setup_model->get_gallery_image_name();
//echo "i reached here"; exit;
           // $this->gallery_setup_model->set_gallery_name($ss_id,$titlename);

            redirect('admin/gallery_setup');
         }


    public function delete()
        {
        $gallery_id = $this->uri->segment(4);
        
        if (empty($gallery_id))
        {
            show_404();
        }
        //  echo "i am here"; exit;      
        $gallery_setup = $this->gallery_setup_model->get_gallery_image_byid($gallery_id);
        $file_path=$gallery_setup['gallery_image_url'];
        $tn_path=$_SERVER['DOCUMENT_ROOT'] . '/tucirweb/site_assets/uploads/gallery/thumbnail/'.$gallery_setup['gallery_image_name'];
        //echo $tn_path;exit;


//echo $file_path; exit;
if(is_file($file_path)){
        unlink($file_path);
        unlink($tn_path);
        echo 'File  has been deleted';
      } else {
        echo 'Could not delete file does not exist';
      }
  

        $this->gallery_setup_model->delete_gallery($gallery_id);        
        redirect( base_url() . 'admin/gallery_setup');        
        }

public function index(){
	$data['gallery_setup']=$this->gallery_setup_model->get_gallery_image_name();
	$data['titlename']=$this->user_model->get_logged_user();
	$this->display('admin/gallery_setup',$data);
}


 public function resizeImage($filename)
   {
   
      $source_path = $_SERVER['DOCUMENT_ROOT'] . '/tucirweb/site_assets/uploads/gallery/'. $filename;
      //echo $source_path;exit;
      $target_path = $_SERVER['DOCUMENT_ROOT'] . '/tucirweb/site_assets/uploads/gallery/thumbnail/'.$filename;
    //  echo $target_path;exit;
      $config_manip = array(
          'image_library' => 'gd2',
          'source_image' => $source_path,
          'new_image' => $target_path,
          'maintain_ratio' => TRUE,
          'create_thumb' => TRUE,
          'thumb_marker' => '',
          'width' => 120,
          'height' => 70
      );
  //  print_r($config_manip);exit;


      $this->load->library('image_lib', $config_manip);
   //   echo "here";exit;
   //   $this->image_lib->resize();
      if (!$this->image_lib->resize()) {
        echo "something went wrong!";
          echo $this->image_lib->display_errors();
      }

     $this->image_lib->clear();
   }





/* write above here */
}