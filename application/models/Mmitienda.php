<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmitienda extends CI_Model{
    public function registrar_usuario($datos){

        $this->db->insert("usuario",$datos);
    }
    public function datos_usuario($email,$pass){
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('email_usuario',$email);
        $this->db->where('pass_usuario',$pass);
        $resultado=$this->db->get();
        return $resultado->result();
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
    public function f_edi_producto($id_producto){
        $this->db->select('*');
        $this->db->from('producto');
        $this->db->where('id_producto',$id_producto);
        $resultado=$this->db->get();
        return $resultado->result();
    }
    public function g_edi_producto($datos,$id_producto){
        $this->db->where('id_producto',$id_producto);
        $this->db->update('producto',$datos);
    }
    public function act_sal_producto($sal_producto,$id_producto){
        $this->db->set('cantidad',$sal_producto);
        $this->db->where('id_producto',$id_producto);
        $this->db->update('producto');
    }
    public function eli_producto($id_producto){
        echo "hola desde modelo ".$id_producto;
        $this->db->where('id_producto',$id_producto);
        $this->db->delete('producto');
    }
    public function detalle_producto($id_producto){
        $this->db->select('*');
        $this->db->from('producto');
        $this->db->where('id_producto',$id_producto);
        $resultado=$this->db->get();
        return $resultado->result();  
    }
    public function buscar_producto($dato){
        $this->db->select('*');
        $this->db->from('producto');
        $this->db->where('nombre_producto like','%'.$dato.'%');
        $resultado=$this->db->get();
        return $resultado->result();
    }
    public function option_producto($id_producto){
        $this->db->select('nombre_producto');
        $this->db->from('producto');
        $this->db->where('id_producto',$id_producto);
        $resultado=$this->db->get();
        return $resultado->result();
    }
}

?>