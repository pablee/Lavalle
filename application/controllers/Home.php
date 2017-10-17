<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}


	public function index()
	{
		$this->load->view('header');
		$this->load->view('contacto');
		$this->load->view('login');
		$this->load->view('navbar');
		$this->load->view('contenido');
		$this->load->view('nosotros');
		$this->load->view('footer');
	}


	public function cascos()
	{
		$this->load->view('header');
		$this->load->view('contacto');
		$this->load->view('login');
		$this->load->view('navbar');
		$this->load->view('productos/cascos');
		$this->load->view('nosotros');
		$this->load->view('footer');
	}
}
