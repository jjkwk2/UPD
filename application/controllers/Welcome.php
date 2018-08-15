<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){

		parent::__construct();
		$this->load->model('client_model');
		$this->load->database('default');
		$this->load->helper('url');
	
		}

	public function index()
	{
		$data['view_tagged'] = $this->client_model->getSliderEvent();
        $this->load->view('client/index.php',$data);
	}
}
