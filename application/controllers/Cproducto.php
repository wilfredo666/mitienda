<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('America/La_Paz');

class Cproducto extends CI_Controller {
    function __construct(){
        parent:: __construct(); 
        $this->load->model('Mmitienda');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    function ver_productos(){
        $datos=array('lista_productos'=>$this->Mmitienda->listar_productos());
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('lista_productos',$datos);
        $this->load->view('footer');
    }
    function f_registro_producto(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('f_reg_producto');
        $this->load->view('footer');
    }
    function registrar_producto(){

        $nom_producto=trim($_POST['nom_producto']);
        $cantidad=trim($_POST['cantidad']);
        $detalle=trim($_POST['detalle']);
        $pre_compra=trim($_POST['pre_compra']);
        $pre_venta=trim($_POST['pre_venta']);

        $fecha=date("Y")."-".date("m")."-".date("d");
        $hora=date("H").":".date("i");

        $datos=array(
            'nombre_producto'=>$nom_producto,
            'cantidad'=>$cantidad,
            'detalle'=>$detalle,
            'precio_compra'=>$pre_compra,
            'precio_venta'=>$pre_venta,
            'fecha'=>$fecha,
            'hora'=>$hora,
        );

        $this->Mmitienda->registrar_producto($datos);

        $this->load->view('header.php');
        $this->load->view('menu.php');
        $this->load->view('f_reg_producto.php');
        $this->load->view('footer.php');

    } 
}
?>