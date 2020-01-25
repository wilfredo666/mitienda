<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmitienda extends CI_Model{
    public function registrar_usuario($datos){
        
        $this->db->insert("usuario",$datos);
    }
    public function ingresar($datos){
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('email_usuario',$datos['email_usuario']);
        $this->db->where('pass_usuario',$datos['pass_usuario']);
        $resultados=$this->db->get();
        return $resultados->result();
    }
    public function registrar_producto($datos){
        $this->db->insert("producto",$datos);
    }
    public function listar_productos(){
        $this->db->select('*');
        $this->db->from('producto');
        $resultado=$this->db->get();
        return $resultado->result();
    }
}

?>