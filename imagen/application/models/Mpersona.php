<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mpersona extends CI_Model
{

	public function listaPersona()
	{
		$this->db->select("*");
		$this->db->from("persona");
		$resultados =$this->db->get();
		return $resultados->result();
	}

    public function registrarPersona($datos)
	{
        $this->db->insert("persona",$datos);
	}
	public function delete($id_persona)
	{
		$this->db->where('id_persona',$id_persona);
		 $this->db->delete("persona");
	}

	public function editarPersona($id_persona)
		{
			$this->db->select("*");
			$this->db->from("persona");
			$this->db->where("id_persona",$id_persona);
			$resultados =$this->db->get();
			return $resultados->result();
		}
		public function update($data,$id_persona)
		{
			$this->db->where('id_persona',$id_persona);
			 $this->db->update("persona",$data);
		}

		public function search($nombre)
		{
		$this->db->select('*');
		$this->db->from('persona');
		$this->db->like("nombre",$nombre);
		$this->db->or_like('apellido', $nombre); 
		$this->db->or_like('edad', $nombre); 
		$consulta = $this->db->get();
		return $consulta->result();
			
		}

	public function num_personas(){

		$number = $this->db->query("SELECT count(*) as number FROM persona")->row()->number;

		return intval($number);
	}

	public function get_pagination($per_page){

		return $this->db->get("persona",$per_page, $this->uri->segment(3));
	}
}

?>
