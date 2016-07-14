<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingPage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->_header();
		$this->load->view('content');
		$this->_footer();
	}

	function _header() {
		$this->load->view('header');
	}

	function _footer() {
		$this->load->view('footer');
	}

}

/* End of file LandingPage.php */
/* Location: ./application/controllers/LandingPage.php */