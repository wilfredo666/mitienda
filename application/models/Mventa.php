<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mventa extends CI_Model{

    public function listar_ventas(){
        $this->db->select('*');
        $this->db->from('venta');
        $this->db->join('cliente','cliente.id_cliente=venta.id_cliente');
        $this->db->join('producto','venta.id_producto=producto.id_producto');
        $resultado=$this->db->get();
        return $resultado->result();
    }
    public function registrar_venta($datos){
        $this->db->insert("venta",$datos);
    }
    public function f_edi_venta($id_venta){
        $this->db->select('*');
        $this->db->from('venta');
        $this->db->join('cliente','cliente.id_cliente=venta.id_cliente');
        $this->db->join('producto','venta.id_producto=producto.id_producto');
        $this->db->where('id_venta',$id_venta);
        $resultado=$this->db->get();
        return $resultado->result();
    }
    public function g_edi_venta($datos,$id_venta){
        $this->db->where('id_venta',$id_venta);
        $this->db->update('venta',$datos);
    }
    public function eliminar_venta($id_venta){
        $this->db->where('id_venta',$id_venta);
        $this->db->delete('venta');
    }
    public function detalle_venta($id_venta){
        $this->db->select('*');
        $this->db->from('venta');
        $this->db->join('cliente','cliente.id_cliente=venta.id_cliente');
        $this->db->join('producto','venta.id_producto=producto.id_producto');
        $this->db->where('id_venta',$id_venta);
        $resultado=$this->db->get();
        return $resultado->result(); 
    }
    public function buscar_venta($dato){
        $this->db->select('*');
        $this->db->from('venta');
        $this->db->join('cliente','cliente.id_cliente=venta.id_cliente');
        $this->db->join('producto','venta.id_producto=producto.id_producto');
        $this->db->where('nombre like','%'.$dato.'%');
        $resultado=$this->db->get();
        return $resultado->result();
    }

}

?>