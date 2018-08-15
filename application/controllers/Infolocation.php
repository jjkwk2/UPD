<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infolocation extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('client_model');
		$this->load->database('default');
		$this->load->helper('url');
	}
	
	public function index()
	{
		//automatic view
		$this->load->view('client/buyer.php');
	}
	
	
}
