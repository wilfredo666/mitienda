<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('America/La_Paz');

class Cmitienda extends CI_Controller {
    function __construct(){
        parent:: __construct(); 
        $this->load->model('Mmitienda');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    function index()
    {
        $this->load->view('login');
        $this->load->view('footer');
    }
    function form_registro_usuario(){
        $this->load->view('registro');
        $this->load->view('footer.php');
    }
    function registrar_usuario(){
        $correo=trim($_POST['correo']);
        $clave=trim($_POST['clave']);
        $nombre=trim($_POST['nombre']);
        $apellido=trim($_POST['apellido']);
        $alias=trim($_POST['alias']);

        $datos=array(
            'nom_usuario'=>$nombre,
            'ape_usuario'=>$apellido,
            'alias_usuario'=>$alias,
            'email_usuario'=>$correo,
            'pass_usuario'=>$clave,
        );

        $this->Mmitienda->registrar_usuario($datos);

        header('location:http://localhost/mitienda');


    }
    function ingresar(){
        $correo=trim($_POST['correo']);
        $clave=trim($_POST['clave']);

        $datos=array(
            'email_usuario'=>$correo,
            'pass_usuario'=>$clave
        );
        $count=sizeof($this->Mmitienda->ingresar($datos));
        if($count>0){
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('panel_inicial');
            $this->load->view('footer');
        }else{
            echo "error de acceso";
        }
    }
    
}
