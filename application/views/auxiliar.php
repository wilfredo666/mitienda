<?php


    
    }
    function buscar_cliente(){
        
        $dato=trim($_POST['valor_bus']);   
        $cliente=array('lista_clientes'=>$this->Mmitienda->buscar_cliente($dato));
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('lista_clientes',$cliente);
        $this->load->view('footer');
        
    }
?>