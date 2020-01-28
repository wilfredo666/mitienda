<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcliente extends CI_Model{
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
    public function registrar_cliente($datos){
        $this->db->insert("cliente",$datos);
    }
    public function listar_cliente(){
        $this->db->select('*');
        $this->db->from('cliente');
        $resultado=$this->db->get();
        return $resultado->result();
    }
    public function f_edi_cliente($id_cliente){
        $this->db->select('*');
        $this->db->from('cliente');
        $this->db->where('id_cliente',$id_cliente);
        $resultado=$this->db->get();
        return $resultado->result();
    }
    public function g_edi_cliente($datos,$id_cliente){
        $this->db->where('id_cliente',$id_cliente);
        $this->db->update('cliente',$datos);
    }
    public function eliminar_cliente($id_cliente){
        $this->db->where('id_cliente',$id_cliente);
        $this->db->delete('cliente');
    }
    public function detalle_cliente($id_cliente){
        $this->db->select('*');
        $this->db->from('cliente');
        $this->db->where('id_cliente',$id_cliente);
        $resultado=$this->db->get();
        return $resultado->result(); 
    }
        public function buscar_cliente($dato){
        $this->db->select('*');
        $this->db->from('cliente');
        $this->db->where('nombre like','%'.$dato.'%');
        $resultado=$this->db->get();
        return $resultado->result();
    }
}

?>