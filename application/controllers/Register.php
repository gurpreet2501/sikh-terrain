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
		
		$data = $_POST;

		$reg_obj = Models\CustomerRegistrations::create($data);
		$reg_id = $reg_obj->id;
		
		if(!empty($_FILES['user_image']['name'])){
			$img_name = $this->imageProcessing($_FILES['user_image'], $reg_id);
			Models\CustomerRegistrations::where('id',$reg_id)->update([
				'event_image' => $img_name
			]);
		}

		success('Registration Successfull'); //declared in messages helper
		redirect('/register');

	}

	function imageProcessing($img_obj,$reg_id){
		 $hash = sha1(time().rand(1,1000)*rand(1,1000));
		// $my_file = new ImageUploader($img_obj['name']);
		$imageUploader = new ImageUploader();

		// Compulsory
		$imageUploader->setPath("assets/images/registrations");   // The directory where images will be uploaded

		// The rest are optional
		$imageUploader->setSalt("my_application_specific_salt");  // It is used while hashing image names
		$imageUploader->setMinFileSize(0);                           // Set minimum file size in bytes
		$imageUploader->setMaxFileSize(9345354000000);   
		$img_name = $imageUploader->upload($img_obj, $hash);
		return $img_name;
		
	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */