<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Pages extends CI_Controller

{

	function __construct()

	{

		parent::__construct();

		// auth_force();

		$this->load->helper('url');

		$this->load->library('tank_auth');

	}



	function gallery()

	{
		$t = Models\GalleryImages::paginate();
		echo "<pre>";
		print_r($t);
		exit;
		$this->load->view('page/gallery');

	}



}





/* End of file welcome.php */

/* Location: ./application/controllers/welcome.php */