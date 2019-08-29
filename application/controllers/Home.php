<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
 	{
 		parent::__construct();
 		$this->load->database();
 		$this->load->model('M_home');
 	}
 
	public function index()
	{
		$this->load->view('home/header');
		$this->load->view('home/header-nav');
		$this->load->view('home/faculty');
		$this->load->view('home/vhome');
		$this->load->view('home/tour');
		$this->load->view('home/footer');
	}

	public function news()
	{
		$this->load->view('home/header');
		$this->load->view('home/header-nav');
		$this->load->view('home/news');
		$this->load->view('home/footer');
	}
}
