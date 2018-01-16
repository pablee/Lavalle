<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller
{
    /*http://midominio.com/controlador/metodo/parametro*/
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('productos');
        $this->load->model('pedido');
        $this->load->model('suscripcion');
        //$this->load->helper(array('form', 'url'));
    }


    public function marcas()
    {

        $marcas = array("Acerbis","Agv","Airoh","Arai","Benelli","Beon","Cros Roads","Forma","Fox","Gaerne","Givi","Hjc","Joe rocket","Kawasaki","Ls2","Momo","Motorman","Nzi","Octane","Origine","Peels","Rpmcroos","Schuberth","Shift","Shiro","Shoei","Sidi","Suzuki","V-can","Yamaha","Otros");
        return $marcas;
    }


    public function rubros()
    {
        $rubros = array("Motos", "Cascos", "Indumentaria", "Calzado", "Accesorios");
        return $rubros;
    }



    public function home()
    {
        if($_SESSION["login"]==true)
        {
            $this->load->view('admin/header');
            $this->load->view('admin/navbar');
            //$this->load->view('admin/nuevo_producto');
        }
        else{
            $this->load->view('admin/logout');
            }

    }


    public function logout()
    {
        $this->load->view('admin/logout');
    }


    public function nuevo_archivo()
    {
        if($_SESSION["login"]==true)
        {
        $this->load->view('admin/header');
        $this->load->view('admin/navbar');
        $this->load->view('admin/nuevo_archivo');
        }
        else{
            $this->load->view('admin/logout');
            }
    }


    public function upload()
    {

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = '*';
        $config['max_size']             = '50000';
        $config['max_width']            = '1024';
        $config['max_height']           = '768';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('archivo'))
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

        $grilla=$this->input->post('grilla[]');

        $config['upload_path']          = './uploads/img/productos';
        $config['allowed_types']        = '*';
        $config['max_size']             = '50000';
        $config['max_width']            = '1920';
        $config['max_height']           = '1080';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('archivo'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('admin/error', $error);
        }
        else
        {
            $upload_data=$this->upload->data();
            $this->productos->guardar($upload_data, $grilla);
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('admin/upload_success', $data);
        }

        $this->listar();
    }


    public function listar()
    {
        if($_SESSION["login"]==true)
        {

        $data['productos']=$this->productos->listar();

        $this->load->view('admin/header');
        $this->load->view('admin/navbar');
        $this->load->view('admin/headerTabla');
        $this->load->view('admin/listar',$data);
        $this->load->view('admin/footerTabla');
        }
        else{
            $this->load->view('admin/logout');
            }
    }


    public function nuevo()
    {
        if($_SESSION["login"]==true)
        {
        $data["rubros"]=$this->rubros();
        $data["marcas"]=$this->marcas();

        $this->load->view('admin/header');
        $this->load->view('admin/navbar');
        $this->load->view('admin/nuevo_producto',$data);
        }
        else{
            $this->load->view('admin/logout');
            }
    }


    public function guardar()
    {

        $productos=$this->input->post('grilla[]');

        $this->productos->guardar($productos);

        $this->listar();
    }


    public function editar()
    {
        if($_SESSION["login"]==true)
        {
        $data['productos']=$this->productos->listar();
        $data["rubros"]=$this->rubros();
        $data["marcas"]=$this->marcas();

        $this->load->view('admin/header');
        $this->load->view('admin/navbar');
        $this->load->view('admin/headerTabla');
        $this->load->view('admin/editar',$data);
        $this->load->view('admin/footerTabla');
        }
        else{
            $this->load->view('admin/logout');
            }
    }


    public function actualizar()
    {

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
                $productos[$i]["modelo"] = $producto["modelo"];
                $productos[$i]["talle"] = $producto["talle"];
                $productos[$i]["publicado"] = $producto["publicado"];
                $productos[$i]["destacado"] = $producto["destacado"];
                $productos[$i]["img"] = $producto["img"];
                $i++;
            }
        }

        $this->productos->actualizar($productos);
        $this->listar();
    }


    public function exportar_pedidos()
    {
        $this->pedido->exportar_local();
        $this->download_send_headers("pedidos_" . date("Y-m-d") . ".csv");
        $this->pedido->exportar();
        die();
        $this->home();
    }


    public function exportar_suscripciones()
    {
        $this->download_send_headers("suscripciones_" . date("Y-m-d") . ".csv");
        $this->suscripcion->exportar();
        die();
        $this->home();
    }


    function download_send_headers($filename)
    {
        // disable caching
        $now = gmdate("D, d M Y H:i:s");
        header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
        header("Cache-Control: max-age=0, no-cache, must-revalidate, proxy-revalidate");
        header("Last-Modified: {$now} GMT");

        // force download
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");

        // disposition / encoding on response body
        header("Content-Disposition: attachment;filename={$filename}");
        header("Content-Transfer-Encoding: binary");
    }
}