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
		$this->load->view('formularios/login');
        $this->load->view('formularios/contacto');
		$this->load->view('formularios/post_venta');
		$this->load->view('formularios/rrhh');
		$this->load->view('formularios/sucursales');
		$this->load->view('formularios/venta_corporativa');
		$this->load->view('info/garantia');
		$this->load->view('contacto');
		$this->load->view('login');
		$this->load->view('navbar2');
		$this->load->view('banner_principal');
		$this->load->view('pago_retiro_envio');
		$this->load->view('pro_cat');
		$this->load->view('marcas');
		$this->load->view('horario');
		$this->load->view('mapa');
		$this->load->view('nosotros');
		$this->load->view('footer');
	}

/*
    public function contacto()
    {
        $this->load->view('header');
        $this->load->view('contacto_formulario');
    }
*/

    public function login()
    {

        $this->load->model('login');
        $data['usuario']  = $this->input->post('usuario');
        $data['password'] = $this->input->post('password');
        $data['recordar'] = $this->input->post('recordar');
        $validacion=$this->login->validar($data);

        if($validacion==1)
        {

            $this->load->view('admin/home');
        }
        else{
            $this->index();
            }
    }

	public function enviar()
	{
		$data['nombre']   = $this->input->post('nombre');
		$data['mail']     = $this->input->post('mail');
		$data['telefono'] = $this->input->post('telefono');
		$data['para']     = $this->input->post('para');
		$data['consulta'] = $this->input->post('consulta');
		$this->load->view('formularios/send', $data);
        $this->index();
	}

	public function conocenos()
	{
		$this->load->view('header');
		$this->load->view('formularios/contacto');
		$this->load->view('formularios/post_venta');
		$this->load->view('formularios/rrhh');
		$this->load->view('formularios/sucursales');
		$this->load->view('formularios/venta_corporativa');
		$this->load->view('info/garantia');
		$this->load->view('contacto');
		$this->load->view('login');
		$this->load->view('navbar2');
		$this->load->view('info/conocenos');
		$this->load->view('horario');
		$this->load->view('mapa');
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
