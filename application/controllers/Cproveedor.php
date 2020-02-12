<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('America/La_Paz');

class Cproveedor extends CI_Controller {
        function __construct(){
        parent:: __construct(); 
        $this->load->model('Mproveedor');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
        function ver_proveedor(){
        $datos=array('lista_proveedores'=>$this->Mproveedor->listar_proveedores());
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('lista_proveedor',$datos);
        $this->load->view('footer');
    }
        function f_reg_proveedor(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('f_reg_proveedor');
        $this->load->view('footer');
    }
    function registrar_proveedor(){

        $nom_empresa=trim($_POST['nom_empresa']);
        $encargado=trim($_POST['encargado']);
        $celular=trim($_POST['celular']);
        $direccion=trim($_POST['direccion']);

        $datos=array(
            'empresa'=>$nom_empresa,
            'encargado'=>$encargado,
            'celular_prov'=>$celular,
            'direccion_prov'=>$direccion
        );

        $this->Mproveedor->registrar_proveedor($datos);

        $this->ver_proveedor();

    }
        function f_editar_proveedor(){
        $id_proveedor=$this->uri->segment(3);
        $proveedor=array('proveedor'=>$this->Mproveedor->f_edi_proveedor($id_proveedor));
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('f_edi_proveedor',$proveedor);
        $this->load->view('footer');
    }
     function g_edi_proveedor(){
        $id_proveedor=$this->uri->segment(3);
        $nom_proveedor=trim($_POST['nom_proveedor']);
        $encargado=trim($_POST['encargado']);
        $celular_prov=trim($_POST['celular']);
        $direccion_prov=trim($_POST['direccion']);

        $datos=array(
            'empresa'=>$nom_proveedor,
            'encargado'=>$encargado,
            'celular_prov'=>$celular_prov,
            'direccion_prov'=>$direccion_prov,
        );

        $this->Mproveedor->g_edi_proveedor($datos,$id_proveedor);

        $this->ver_proveedor();

    }
       function f_eliminar_proveedor(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('mnj_eli_prov');
        $this->load->view('footer');
    }
        function eliminar_proveedor(){
        $id_proveedor=$this->uri->segment(3);
        $this->Mproveedor->eliminar_proveedor($id_proveedor);
        $this->ver_proveedor();
    }
            function detalle_proveedor(){
        $id_proveedor=$this->uri->segment(3);
        $datos=array('detalle_proveedor'=>$this->Mproveedor->detalle_proveedor($id_proveedor));
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('detalle_proveedor',$datos);
        $this->load->view('footer');
    }
        function buscar_proveedor(){
        
        $dato=trim($_POST['valor_bus']);   
        $proveedor=array('lista_proveedores'=>$this->Mproveedor->buscar_proveedor($dato),
                        'dato'=>$dato);
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('lista_proveedor',$proveedor);
        $this->load->view('footer');
        
    }
}
