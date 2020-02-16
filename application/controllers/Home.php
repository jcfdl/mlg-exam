<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('user');
	}

	public function index()
	{
		$data = array();
		$this->load->view('blocks/header');
		$this->load->view('home/index', $data);
		$this->load->view('blocks/footer');
	}
}
