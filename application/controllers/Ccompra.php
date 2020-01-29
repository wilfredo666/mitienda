<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('America/La_Paz');

class Ccompra extends CI_Controller {
    function __construct(){
        parent:: __construct(); 
        $this->load->model('Mcompra');
        $this->load->model('Mproveedor');
        $this->load->model('Mmitienda');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    function ver_compra(){
        $datos=array('lista_compra'=>$this->Mcompra->listar_compras());
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('lista_compra',$datos);
        $this->load->view('footer');
    }
    function f_reg_compra(){
        $datos=array(
            'lista_producto'=>$this->Mmitienda->listar_productos(),
            'lista_proveedor'=>$this->Mproveedor->listar_proveedores()
        );
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('f_reg_compra',$datos);
        $this->load->view('footer');
    }
    function registrar_compra(){

        $id_producto=trim($_POST['producto']);
        $id_proveedor=trim($_POST['proveedor']);
        $cantidad=trim($_POST['cantidad']);
        $precio_com=trim($_POST['precio_com']);
        $total=trim($_POST['total']);
        $pago=trim($_POST['pago']);
        $cambio=trim($_POST['cambio']);

        $fecha=date("Y")."-".date("m")."-".date("d");
        $hora=date("H").":".date("i");

        $datos=array(
            'id_producto'=>$id_producto,
            'cantidad_com'=>$cantidad,
            'precio_com'=>$precio_com,
            'id_proveedor'=>$id_proveedor,
            'total_com'=>$total,
            'pago_com'=>$pago,
            'cambio_com'=>$cambio,
            'fecha'=>$fecha,
            'hora'=>$hora

        );

        $this->Mcompra->registrar_compra($datos);

        $this->ver_compra();

    }
    function f_editar_compra(){
        $id_compra=$this->uri->segment(3);        
        $compra=array('compra'=>$this->Mcompra->f_edi_compra($id_compra));
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('f_edi_compra',$compra);
        $this->load->view('footer');
    }
    function g_edi_compra(){
        $id_compra=$this->uri->segment(3);
        $cantidad=trim($_POST['cantidad']);
        $precio=trim($_POST['precio_com']);
        $total=trim($_POST['total']);
        $pago=trim($_POST['pago']);
        $cambio=trim($_POST['cambio']);

        $datos=array(
            'cantidad_com'=>$cantidad,
            'precio_com'=>$precio,
            'total_com'=>$total,
            'pago_com'=>$pago,
            'cambio_com'=>$cambio
        );

        $this->Mcompra->g_edi_compra($datos,$id_compra);
        $this->ver_compra();
    }
    function f_eliminar_compra(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('mnj_eli_com');
        $this->load->view('footer');
    }
                function eliminar_compra(){
        $id_compra=$this->uri->segment(3);
        $this->Mcompra->eliminar_compra($id_compra);
        $this->ver_compra();
    }
                    function detalle_compra(){
        $id_compra=$this->uri->segment(3);
        $datos=array('detalle_compra'=>$this->Mcompra->detalle_compra($id_compra));
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('detalle_compra',$datos);
        $this->load->view('footer');
    }
     function buscar_compra(){
        
        $dato=trim($_POST['valor_bus']);   
        $compra=array('lista_compra'=>$this->Mcompra->buscar_compra($dato));
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('lista_compra',$compra);
        $this->load->view('footer');
        
    }
}