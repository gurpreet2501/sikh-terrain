<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller
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
		if(!$this->tank_auth->is_logged_in())
			return;
		
		$this->load->view('home');
	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */