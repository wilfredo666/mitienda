<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MLogin extends CI_Model {

	function verificar($email, $password){
					$this->db->select("*");
					$this->db->from("usuarios");
					$this->db->where("email",$email);
					$this->db->where("password",$password);
					$resultados = $this->db->get();
					return $resultados->result();
	}
}
