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
		$this->load->model('productos');
		$data['form_action'] = "home/enviar";
        $data['destacados'] = $this->productos->destacados();
		$this->load->view('header');
		$this->load->view('formularios/login',$data);
        $this->load->view('formularios/contacto',$data);
		$this->load->view('formularios/post_venta',$data);
		$this->load->view('formularios/rrhh',$data);
		$this->load->view('formularios/sucursales',$data);
		$this->load->view('formularios/venta_corporativa',$data);
		$this->load->view('info/garantia');
		$this->load->view('contacto');
		$this->load->view('login');
		$this->load->view('navbar2');
		$this->load->view('banner_principal');
		$this->load->view('pago_retiro_envio');
		$this->load->view('pro_cat', $data);
		$this->load->view('marcas');
		$this->load->view('horario');
		$this->load->view('mapa');
		$this->load->view('nosotros');
		$this->load->view('footer');
	}

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


	/*Listar por categoria*/
	public function cascos()
	{
		$this->load->model('productos');
		$data['productos']=$this->productos->listar_cat('cascos');
        $data['marcas']=$this->productos->filtros_cat('cascos');
		$data['rubro']='cascos';
        $data['i']=0;
        $this->load->view('formularios/login');
        $this->load->view('formularios/contacto');
        $this->load->view('formularios/post_venta');
        $this->load->view('formularios/rrhh');
        $this->load->view('formularios/sucursales');
        $this->load->view('formularios/venta_corporativa');
        $this->load->view('info/garantia');
		$this->load->view('header');
		$this->load->view('contacto');
		$this->load->view('login');
		$this->load->view('navbar2');
		$this->load->view('productos/listar',$data);
		$this->load->view('nosotros');
		$this->load->view('footer');
	}

	public function indumentaria()
	{
		$this->load->model('productos');
		$data['productos']=$this->productos->listar_cat('indumentaria');
        $this->load->view('formularios/login');
        $this->load->view('formularios/contacto');
        $this->load->view('formularios/post_venta');
        $this->load->view('formularios/rrhh');
        $this->load->view('formularios/sucursales');
        $this->load->view('formularios/venta_corporativa');
        $this->load->view('info/garantia');
		$this->load->view('header');
		$this->load->view('contacto');
		$this->load->view('login');
		$this->load->view('navbar2');
		$this->load->view('productos/listar',$data);
		$this->load->view('nosotros');
		$this->load->view('footer');
	}

	public function accesorios()
	{
		$this->load->model('productos');
		$data['productos']=$this->productos->listar_cat('accesorios');
        $this->load->view('formularios/login');
        $this->load->view('formularios/contacto');
        $this->load->view('formularios/post_venta');
        $this->load->view('formularios/rrhh');
        $this->load->view('formularios/sucursales');
        $this->load->view('formularios/venta_corporativa');
        $this->load->view('info/garantia');
		$this->load->view('header');
		$this->load->view('contacto');
		$this->load->view('login');
		$this->load->view('navbar2');
		$this->load->view('productos/listar',$data);
		$this->load->view('nosotros');
		$this->load->view('footer');
	}

	public function motos()
	{
		$this->load->model('productos');
		$data['productos']=$this->productos->listar_cat('motos');
        $this->load->view('formularios/login');
        $this->load->view('formularios/contacto');
        $this->load->view('formularios/post_venta');
        $this->load->view('formularios/rrhh');
        $this->load->view('formularios/sucursales');
        $this->load->view('formularios/venta_corporativa');
        $this->load->view('info/garantia');
		$this->load->view('header');
		$this->load->view('contacto');
		$this->load->view('login');
		$this->load->view('navbar2');
		$this->load->view('productos/listar',$data);
		$this->load->view('nosotros');
		$this->load->view('footer');
	}


    /**Filtros**/
    public function filtrar()
    {
        $filtro = $this->input->get('marca');
        $rubro = $this->input->get('rubro');

        $this->load->model('productos');
        $data['productos']=$this->productos->filtrar($filtro, $rubro);
        $data['marcas']=$this->productos->filtros_cat('cascos');
        $data['i']=0;
        $this->load->view('formularios/login');
        $this->load->view('formularios/contacto');
        $this->load->view('formularios/post_venta');
        $this->load->view('formularios/rrhh');
        $this->load->view('formularios/sucursales');
        $this->load->view('formularios/venta_corporativa');
        $this->load->view('info/garantia');
        $this->load->view('header');
        $this->load->view('contacto');
        $this->load->view('login');
        $this->load->view('navbar2');
        $this->load->view('productos/listar',$data);
        $this->load->view('nosotros');
        $this->load->view('footer');
    }

}
