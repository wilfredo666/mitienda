<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mimagenes extends CI_Model {

	public function guardar($datos)
	{
		return $this->db->insert("imagenes", $datos);
	}
}
