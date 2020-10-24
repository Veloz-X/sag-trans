<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('getmenu_helper','url'));
	}

	public function index()
	{
		$data['menu'] = menu_home();
		$this->load->view('home');
	}

}
