<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->helper(array('getmenu','url'));
		$data['menu'] = menu_home();
		$this->load->view('home');
	}

}
