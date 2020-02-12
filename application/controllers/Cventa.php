
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('America/La_Paz');

class Cventa extends CI_Controller {
    function __construct(){
        parent:: __construct(); 
        $this->load->model('Mventa');
        $this->load->model('Mcliente');
        $this->load->model('Mmitienda');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    function ver_venta(){
        $datos=array('lista_venta'=>$this->Mventa->listar_ventas());
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('lista_venta',$datos);
        $this->load->view('footer');
    }
    function f_reg_venta(){
        $datos=array(
            'lista_producto'=>$this->Mmitienda->listar_productos(),
            'lista_cliente'=>$this->Mcliente->listar_cliente()
        );
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('f_reg_venta',$datos);
        $this->load->view('footer');
    }
    function registrar_venta(){

        $id_producto=trim($_POST['producto']);
        $id_cliente=trim($_POST['cliente']);
        $cantidad_ven=trim($_POST['cantidad']);
        $total=trim($_POST['total']);
        $pago=trim($_POST['pago']);
        $cambio=trim($_POST['cambio']);

        $fecha=date("Y")."-".date("m")."-".date("d");
        $hora=date("H").":".date("i");
        
        /*separando en arreglo el id y cantidad del producto*/
        $producto=explode("-", $id_producto);
        
        /*calculando el saldo del producto*/
        $sal_producto=$producto[1]-$cantidad_ven;

        $datos=array(
            'id_producto'=>$producto[0],
            'id_cliente'=>$id_cliente,
            'cantidad_vent'=>$cantidad_ven,
            'total_ven'=>$total,
            'pago_ven'=>$pago,
            'cambio_ven'=>$cambio,
            'fecha'=>$fecha,
            'hora'=>$hora

        );

        $this->Mventa->registrar_venta($datos);
        /*actualizando saldo de producto*/
        $this->Mmitienda->act_sal_producto($sal_producto,$producto[0]);
        $this->ver_venta();

    }
    function f_editar_venta(){
        $id_venta=$this->uri->segment(3);        
        $venta=array('venta'=>$this->Mventa->f_edi_venta($id_venta));
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('f_edi_venta',$venta);
        $this->load->view('footer');
    }
    function g_edi_venta(){
        $id_venta=$this->uri->segment(3);
        $cantidad=trim($_POST['cantidad']);
        $total=trim($_POST['total']);
        $pago=trim($_POST['pago']);
        $cambio=trim($_POST['cambio']);

        $datos=array(
            'cantidad_vent'=>$cantidad,
            'total_ven'=>$total,
            'pago_ven'=>$pago,
            'cambio_ven'=>$cambio
        );
        
        $this->Mventa->g_edi_venta($datos,$id_venta);
        $this->ver_venta();
    }
           function f_eliminar_venta(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('mnj_eli_ven');
        $this->load->view('footer');
    }
            function eliminar_venta(){
        $id_venta=$this->uri->segment(3);
        $this->Mventa->eliminar_venta($id_venta);
        $this->ver_venta();
    }
                function detalle_venta(){
        $id_venta=$this->uri->segment(3);
        $datos=array('detalle_venta'=>$this->Mventa->detalle_venta($id_venta));
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('detalle_venta',$datos);
        $this->load->view('footer');
    }
            function buscar_venta(){
        
        $dato=trim($_POST['valor_bus']);   
        $venta=array('lista_venta'=>$this->Mventa->buscar_venta($dato),
                    'dato'=>$dato);
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('lista_venta',$venta,$dato);
        $this->load->view('footer');
        
    }
}