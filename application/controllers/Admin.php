<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    /*http://midominio.com/controlador/metodo/parametro*/
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        //$this->load->helper(array('form', 'url'));
    }

    public function home()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/navbar');
        $this->load->view('admin/nuevo_producto');
    }


    public function logout()
    {
        $this->load->view('admin/logout');
    }


    public function nuevo_archivo()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/navbar');
        $this->load->view('admin/nuevo_archivo');
    }


    public function upload()
    {
        $this->load->model('productos');

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = '*';
        $config['max_size']             = '50000';
        $config['max_width']            = '1024';
        $config['max_height']           = '768';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('archivo'))
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('nuevo', $error);
        }
        else
        {
            $upload_data=$this->upload->data();
            $this->productos->guardar_archivo($upload_data);
            $data = array('upload_data' => $this->upload->data());
            //$this->load->view('consumo/upload_success', $data);
        }

        $this->home();
    }


    public function upload_producto()
    {
        $this->load->model('productos');
        $grilla=$this->input->post('grilla[]');

        $config['upload_path']          = './uploads/img/';
        $config['allowed_types']        = '*';
        $config['max_size']             = '50000';
        $config['max_width']            = '1920';
        $config['max_height']           = '1080';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('archivo'))
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('nuevo', $error);
        }
        else
        {
            $upload_data=$this->upload->data();
            $this->productos->guardar($upload_data, $grilla);
            $data = array('upload_data' => $this->upload->data());
            //$this->load->view('consumo/upload_success', $data);
        }

        $this->home();
    }

/*
    public function consultar()
    {
        $this->load->model('sector');
        $data['sectores']=$this->sector->listar();

        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('consumo/consultar', $data);
    }
*/

    public function listar()
    {
        $this->load->model('productos');
        $data['productos']=$this->productos->listar();

        $this->load->view('admin/header');
        $this->load->view('admin/navbar');
        $this->load->view('admin/headerTabla');
        $this->load->view('admin/listar',$data);
        $this->load->view('admin/footerTabla');
    }


    public function nuevo()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/navbar');
        $this->load->view('admin/nuevo_producto');
    }


    public function guardar()
    {
        $this->load->model('productos');
        $productos=$this->input->post('grilla[]');

        $this->productos->guardar($productos);

        $this->listar();
    }


    public function editar()
    {
        $this->load->model('productos');
        $data['productos']=$this->productos->listar();

        $this->load->view('admin/header');
        $this->load->view('admin/navbar');
        $this->load->view('admin/headerTabla');
        $this->load->view('admin/editar',$data);
        $this->load->view('admin/footerTabla');
    }


    public function actualizar()
    {
        $this->load->model('productos');
        $grilla=$this->input->post('grilla[]');

        $i=0;
        foreach($grilla as $producto)
        {
            if($producto['modificado']==1)
            {
                $productos[$i]["sku"] = $producto["sku"];
                $productos[$i]["titulo"] = $producto["titulo"];
                $productos[$i]["stock"]  = $producto["stock"];
                $productos[$i]["precio"] = $producto["precio"];
                $productos[$i]["rubro"] = $producto["rubro"];
                $productos[$i]["marca"] = $producto["marca"];
                $productos[$i]["destacado"] = $producto["destacado"];
                $i++;
            }
        }

        $this->productos->actualizar($productos);
        $this->listar();
    }

/*
    public function borrar()
    {
        $this->load->model('consumo');
        $mes=$this->input->post('mes');
        $anio=$this->input->post('anio');

        $this->consumo->borrar($mes, $anio);
        $this->listar();
    }
*/
}