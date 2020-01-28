<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('America/La_Paz');

class Ccliente extends CI_Controller {
    function __construct(){
        parent:: __construct(); 
        $this->load->model('Mcliente');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    function ver_cliente(){
        $datos=array('lista_clientes'=>$this->Mcliente->listar_cliente());
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('lista_clientes',$datos);
        $this->load->view('footer');
    }
    function f_reg_cliente(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('f_reg_cliente');
        $this->load->view('footer');
    }
    function registrar_cliente(){

        $nom_cliente=trim($_POST['nom_cliente']);
        $ap_cliente=trim($_POST['ap_cliente']);
        $ci_nit=trim($_POST['ci_nit']);
        $celular=trim($_POST['celular']);
        $direccion=trim($_POST['direccion']);

        $datos=array(
            'nombre'=>$nom_cliente,
            'apellido'=>$ap_cliente,
            'ci_nit'=>$ci_nit,
            'celular_cli'=>$celular,
            'direccion_cli'=>$direccion
        );

        $this->Mcliente->registrar_cliente($datos);

        $this->ver_cliente();

    }
    function f_editar_cliente(){
        $id_cliente=$this->uri->segment(3);
        $cliente=array('cliente'=>$this->Mcliente->f_edi_cliente($id_cliente));
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('f_edi_cliente',$cliente);
        $this->load->view('footer');
    }
    function g_edi_cliente(){
        $id_cliente=$this->uri->segment(3);
        $nom_cliente=trim($_POST['nom_cliente']);
        $apellido=trim($_POST['apellido']);
        $ci_nit=trim($_POST['ci_nit']);
        $celular_cli=trim($_POST['celular_cli']);
        $direccion_cli=trim($_POST['direccion_cli']);

        $datos=array(
            'nombre'=>$nom_cliente,
            'apellido'=>$apellido,
            'ci_nit'=>$ci_nit,
            'celular_cli'=>$celular_cli,
            'direccion_cli'=>$direccion_cli
        );

        $this->Mcliente->g_edi_cliente($datos,$id_cliente);

        $this->ver_cliente();

    }

    function f_eliminar_cliente(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('mnj_eli_cli');
        $this->load->view('footer');
    }
    function eliminar_cliente(){
        $id_cliente=$this->uri->segment(3);
        $this->Mcliente->eliminar_cliente($id_cliente);
        $this->ver_cliente();
    }
        function detalle_cliente(){
        $id_cliente=$this->uri->segment(3);
        $datos=array('detalle_cliente'=>$this->Mcliente->detalle_cliente($id_cliente));
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('detalle_cliente',$datos);
        $this->load->view('footer');
    }
    function buscar_cliente(){
        
        $dato=trim($_POST['valor_bus']);   
        $cliente=array('lista_clientes'=>$this->Mcliente->buscar_cliente($dato));
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('lista_clientes',$cliente);
        $this->load->view('footer');
        
    }
}
?>