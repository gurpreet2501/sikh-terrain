<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
use App\Libs\SimpleImage;
use App\Libs\Image;
use App\Libs\ImageUploader;
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
		
		$this->load->view('page/register-for-event');
	}

	function registration_post()
	{	
		
		echo "<pre>";
		print_r($_POST);
		exit;
		if(isset($_FILES['user_image']))
			$this->imageProcessing($_FILES['user_image'],$registration_id);


	}

	function imageProcessing($img_obj){
		
		// $my_file = new ImageUploader($img_obj['name']);
		$imageUploader = new ImageUploader();

		// Compulsory
		$imageUploader->setPath("assets/images/registrations");   // The directory where images will be uploaded

		// The rest are optional
		$imageUploader->setSalt("my_application_specific_salt");  // It is used while hashing image names
		$imageUploader->setMinFileSize(0);                           // Set minimum file size in bytes
		$imageUploader->setMaxFileSize(9345354000000);   
		$img_name = $imageUploader->upload($img_obj, "my_id");
		echo "<pre>";
		print_r($img_name);
		exit;
		
	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */