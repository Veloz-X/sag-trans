<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {



	public function index()
	{
		// $data['menu'] = main_menu1();
		$this->load->view('home');
	}
	public function create(){
		$this->load->view('mante');
	}
}
