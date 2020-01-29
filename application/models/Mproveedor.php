<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mproveedor extends CI_Model{

        public function listar_proveedores(){
        $this->db->select('*');
        $this->db->from('proveedor');
        $resultado=$this->db->get();
        return $resultado->result();
    }
    public function registrar_proveedor($datos){
        $this->db->insert("proveedor",$datos);
    }

    public function f_edi_proveedor($id_proveedor){
        $this->db->select('*');
        $this->db->from('proveedor');
        $this->db->where('id_proveedor',$id_proveedor);
        $resultado=$this->db->get();
        return $resultado->result();
    }
    public function g_edi_proveedor($datos,$id_proveedor){
        $this->db->where('id_proveedor',$id_proveedor);
        $this->db->update('proveedor',$datos);
    }
    public function eliminar_proveedor($id_proveedor){
        $this->db->where('id_proveedor',$id_proveedor);
        $this->db->delete('proveedor');
    }
    public function detalle_proveedor($id_proveedor){
        $this->db->select('*');
        $this->db->from('proveedor');
        $this->db->where('id_proveedor',$id_proveedor);
        $resultado=$this->db->get();
        return $resultado->result(); 
    }
        public function buscar_proveedor($dato){
        $this->db->select('*');
        $this->db->from('proveedor');
        $this->db->where('empresa like','%'.$dato.'%');
        $resultado=$this->db->get();
        return $resultado->result();
    }
}

?>