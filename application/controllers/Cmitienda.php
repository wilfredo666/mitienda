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
        $this->session->set_userdata($datos);

        $count=sizeof($this->Mmitienda->ingresar($datos));

        $this->form_validation->set_rules('correo', 'Contraseña', 'required');
        $this->form_validation->set_rules('clave', 'Contraseña', 'required');

        if($this->form_validation->run()==false){
            header('location:http://localhost/mitienda');
        }else{
            if($count>0){
                $this->perfil();
            }else{
                $error=array('mensaje'=>"Datos incorrectos, vuelve a intentarlo !!!");
                $this->load->view('login',$error);
                $this->load->view('footer');
            }
        }

    }

    function perfil(){
        $this->load->view('header');
        $this->load->view('menu');

        $email=$this->session->email_usuario;
        $pass=$this->session->pass_usuario;

        $datos=array('datos_usuario'=>$this->Mmitienda->datos_usuario($email,$pass));
        $this->load->view('perfil',$datos);
        $this->load->view('footer');
    }
    function salir(){
        $this->session->sess_destroy();
        header('location:http://localhost/mitienda');
    }
}
