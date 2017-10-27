<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('productos');
	}


	public function index()
	{
		$data['form_action'] = "enviar";
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
        //$data['producto'] = $this->input->post('producto[]');
		//Datos de contacto
        $data['nombre']   = $this->input->post('nombre');
		$data['mail']     = $this->input->post('mail');
		$data['telefono'] = $this->input->post('telefono');
		$data['para']     = $this->input->post('para');
		$data['consulta'] = $this->input->post('consulta');

		//Datos de producto
        $data['sku']=$this->input->post('sku');
        $data['titulo']=$this->input->post('titulo');
        $data['precio']=$this->input->post('precio');
        $data['rubro']=$this->input->post('rubro');
        $data['marca']=$this->input->post('marca');

		$envio=$this->load->view('formularios/send', $data);
		if($envio==true)
		{
			$this->load->view('formularios/success');
			$this->index();
		}
		else{
			$this->index();
			}
	}

	public function conocenos()
	{
		$data['form_action'] = "home/enviar";
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
		$this->load->view('info/conocenos');
		$this->load->view('horario');
		$this->load->view('mapa');
		$this->load->view('nosotros');
		$this->load->view('footer');
	}

	/*Listar por categoria*/
    public function categoria()
    {
        $filtrado=array("rubro"=>"", "marca"=>"", "modelo"=>"");
        $filtrado["rubro"]=$this->input->get('rubro');

        $data['productos']=$this->productos->listar_cat($filtrado["rubro"]);
        $data['filtros']=$this->productos->filtros($filtrado["rubro"]);
        $data['filtrado']=$filtrado;
        $data['i']=0;
        $data['form_action'] = "enviar";

        $this->load->view('header');
        $this->load->view('formularios/login',$data);
        $this->load->view('formularios/contacto',$data);
        $this->load->view('formularios/post_venta',$data);
        $this->load->view('formularios/rrhh',$data);
        $this->load->view('formularios/sucursales',$data);
        $this->load->view('formularios/venta_corporativa',$data);
        $this->load->view('formularios/comprar',$data);

        $this->load->view('info/garantia');
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
        $filtrado=array("rubro"=>"cascos", "marca"=>"", "modelo"=>"");
        $filtrado["rubro"]=$this->input->get('rubro');
        $filtrado["marca"]=$this->input->get('marca');
        $filtrado["modelo"]=$this->input->get('modelo');

        //Obtengo los filtros disponibles para la categoria.
        $data['filtros']=$this->productos->filtros($filtrado["rubro"]);
        //Obtengo los productos de acuerdo a los filtros usados.
        $data['productos']=$this->productos->filtrar($filtrado);
        //Devuelvo los filtros usados para visualizar los mismos en la vista.
        $data['filtrado']=$filtrado;

        $data['i']=0;
        $data['form_action'] = "enviar";
        $this->load->view('formularios/login',$data);
        $this->load->view('formularios/contacto',$data);
        $this->load->view('formularios/post_venta',$data);
        $this->load->view('formularios/rrhh',$data);
        $this->load->view('formularios/sucursales',$data);
        $this->load->view('formularios/venta_corporativa',$data);
        $this->load->view('formularios/comprar',$data);

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
