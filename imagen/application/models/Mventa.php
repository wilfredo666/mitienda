<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mventa extends CI_Model
{

	public function getVenta()
	{
		$this->db->select("*");
        $this->db->from("venta v");
        $this->db->join("cliente c","c.id_cliente = v.id_cliente");
        $resultados = $this->db->get();
        return $resultados->result();
	}

	public function getProductos()
	{
		$this->db->select("*");
        $this->db->from("producto");
        $resultados = $this->db->get();
        return $resultados->result();
	}
 
	public function getProducto($id_producto)
	{
		$this->db->select("*");
        $this->db->from("producto");
        $this->db->where("id_producto",$id_producto);
        $resultados = $this->db->get();
        return $resultados->result();
	}

	public function getCliente()
	{
		$this->db->select("*");
        $this->db->from("cliente");
        $resultados = $this->db->get();
        return $resultados->result();
	}


    public function registrarVenta($data)
	{
        $this->db->insert("venta",$data);
	}

	public function getIDVenta()
	{
		$this->db->select("*");
        $this->db->from("venta");
        $this->db->order_by('id_venta', 'DESC');  
        $this->db->limit(1);
        $resultados = $this->db->get();
        return $resultados->result();
	}

    public function registrarDetalleVenta($data)
	{
        $this->db->insert("detalle_venta",$data);
	}

	public function getVentas($id_venta)
	{
		$this->db->select("*");
        $this->db->from("venta v");
        $this->db->where("v.id_venta",$id_venta);
        $this->db->join("cliente c","c.id_cliente = v.id_cliente");
        $this->db->join("detalle_venta dv","dv.id_venta = v.id_venta");
        $this->db->join("producto p","p.id_producto = dv.id_producto");
        $resultados = $this->db->get();
        return $resultados->result();

	}	

	public function getDetalleVenta($id_detalle_venta)
	{
		$this->db->select("*");
        $this->db->from("detalle_venta");
        $this->db->where('id_detalle_venta', $id_detalle_venta);  
        $resultados = $this->db->get();
        return $resultados->result();
	}

	public function editarDetalleVenta($data,$id_detalle_venta) 	
	{
        $this->db->where('id_detalle_venta', $id_detalle_venta); 
        $this->db->update("detalle_venta",$data); 
	}	

	

	public function getDetalleVentaSuma($id_venta) 	
	{
		$this->db->select("*");
        $this->db->from("detalle_venta");
        $this->db->where('id_venta', $id_venta); 
        $resultados = $this->db->get();
        return $resultados->result();        
	}	

	public function getVentaEditar($id_venta) 	
	{
		$this->db->select("*");
        $this->db->from("venta");
        $this->db->where('id_venta', $id_venta); 
        $resultados = $this->db->get();
        return $resultados->result();        
	}	

	public function getGuardarVenta($data,$id_venta) 	
	{ 
        $this->db->where('id_venta', $id_venta); 
        $this->db->update('venta', $data); 
     
	}

	public function eliminarDetalleVenta($id_detalle_venta)
	{
		$this->db->where('id_detalle_venta', $id_detalle_venta);
		$this->db->delete('detalle_venta');  
	}	
    
    public function DeleteVentas($id_venta)
    {
    	$this->db->where('id_venta', $id_venta);
		$this->db->delete('detalle_venta'); 

		$this->db->where('id_venta', $id_venta);
		$this->db->delete('venta'); 
    }

    public function buscarVenta($txt_buscar)
    {
       $this->db->select("*");
       $this->db->from("venta v");

       $this->db->join("cliente c","c.id_cliente = v.id_cliente");
       
       $this->db->join("detalle_venta dv","dv.id_venta = v.id_venta");
       $this->db->join("producto p","c.id_producto = dv.id_producto");

       $this->db->like('c.nombres_c', $txt_buscar); 
       $this->db->order_by('v.id_venta', 'DESC'); 

    }





}

?>
