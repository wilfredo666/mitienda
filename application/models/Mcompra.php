<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcompra extends CI_Model{

    public function listar_compras(){
        $this->db->select('*');
        $this->db->from('compra');
        $this->db->join('producto','producto.id_producto=compra.id_producto');
        $this->db->join('proveedor','proveedor.id_proveedor=compra.id_proveedor');
        $resultado=$this->db->get();
        return $resultado->result();
    }
    public function registrar_compra($datos){
        $this->db->insert("compra",$datos);
    }
    public function f_edi_compra($id_compra){
        $this->db->select('*');
        $this->db->from('compra');
        $this->db->join('proveedor','proveedor.id_proveedor=compra.id_proveedor');
        $this->db->join('producto','compra.id_producto=producto.id_producto');
        $this->db->where('id_compra',$id_compra);
        $resultado=$this->db->get();
        return $resultado->result();
    }
    public function g_edi_compra($datos,$id_compra){
        $this->db->where('id_compra',$id_compra);
        $this->db->update('compra',$datos);
    }
    public function eliminar_compra($id_compra){
        $this->db->where('id_compra',$id_compra);
        $this->db->delete('compra');
    }
    public function detalle_compra($id_compra){
        $this->db->select('*');
        $this->db->from('compra');
        $this->db->join('producto','producto.id_producto=compra.id_producto');
        $this->db->join('proveedor','compra.id_proveedor=proveedor.id_proveedor');
        $this->db->where('id_compra',$id_compra);
        $resultado=$this->db->get();
        return $resultado->result(); 
    }
    public function buscar_compra($dato){
        $this->db->select('*');
        $this->db->from('compra');
        $this->db->join('proveedor','proveedor.id_proveedor=compra.id_proveedor');
        $this->db->join('producto','compra.id_producto=producto.id_producto');
        $this->db->where('empresa like','%'.$dato.'%');
        $resultado=$this->db->get();
        return $resultado->result();
    }

}

?>