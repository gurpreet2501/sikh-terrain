<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
use App\Libs\SimpleImage;
use App\Libs\Image;
class Register extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// auth_force();
		$this->load->helper('url');
		$this->load->library('tank_auth');
	}

	function index()
	{
		if(!empty($_FILES)){
			echo "<pre>";
			print_r($_FILES);
			exit;
		}
		$this->load->view('page/register-for-event');
	}

	function registration_post()
	{	


		            $config['upload_path']          = '/images/registrations';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

	     $this->load->library('upload', $config);
	     $this->upload->initialize($config);

                if ( ! $this->upload->do_upload($_FILES['userfile']['tmp_name']))
                {
                        $error = array('error' => $this->upload->display_errors());
                        echo "<pre>";
                        print_r($error);
                        exit;

                }

echo "<pre>";
print_r('$data');
exit;

		$image_sizes = [
	        [
	            'width' => 1200,
	            'height' => 960
	        ]
      	];
  

    $size_in_mbs = intval($_FILES['sutomer_img']['size']/1000000);
    
    $img_extension = pathinfo($_FILES['sutomer_img']['name'], PATHINFO_EXTENSION);

    // $file_size = filesize($_FILES['sutomer_img']['tmp_name']);
  
    $destination_dir = __DIR__.'/../../assets/images/registrations';

    $temp_file_upload = base_url('assets/tmp_registration_images');

    $temp_name = $_FILES['sutomer_img']['tmp_name'];

    $dest_file_name = $destination_dir.'img_test.'.$img_extension;

  	move_uploaded_file($temp_name, $dest_file_name);

		// $img = new Image;

		// $res = $img->upload($_FILES['sutomer_img'],$image_sizes,$destination_dir);

	
		exit;
	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */