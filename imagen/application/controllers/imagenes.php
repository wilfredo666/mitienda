<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class imagenes extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Mimagenes");
	}
	public function index(){
		$this->load->view("header");
		$this->load->view("imagenes");
		$this->load->view("footer");
	}

	public function lista(){

		
		$this->load->view("header");
		$this->load->view("galeria");
		$this->load->view("footer");
	}
	public function subir(){
		
		// print_r($_FILES);
		$this->load->library("upload");
		$config = array(
			"upload_path" => "./galeria",
			'allowed_types' => "jpg|png|jpeg"
		);
		$variablefile= $_FILES;
		$info = array();
		$files = count($_FILES['archivo']['name']);
		for ($i=0; $i < $files; $i++) { 
			$_FILES['archivo']['name'] = $variablefile['archivo']['name'][$i];
			$_FILES['archivo']['type'] = $variablefile['archivo']['type'][$i];
			$_FILES['archivo']['tmp_name'] = $variablefile['archivo']['tmp_name'][$i];
			$_FILES['archivo']['error'] = $variablefile['archivo']['error'][$i];
			$_FILES['archivo']['size'] = $variablefile['archivo']['size'][$i];
			$this->upload->initialize($config);
			if ($this->upload->do_upload('archivo')) {
				$data = array("upload_data" => $this->upload->data());
				$datos = array(
					"name" => $data['upload_data']['file_name'],
				);
				if ($this->Mimagenes->guardar($datos)) {
					//echo "Registro guardado";
					$info[$i] = array(
						"archivo" => $data['upload_data']['file_name'],
						"mensaje" => "Archivo subido y guardado"
					);
				}
				else{
					//echo "Error al intentar guardar la informacion";
					$info[$i] = array(
						"archivo" => $data['upload_data']['file_name'],
						"mensaje" => "Archivo subido pero no guardado guardado"
					);
				}
			}
			else{
				//echo $this->upload->display_errors();
				$info[$i] = array(
						"archivo" => $_FILES['archivo']['name'],
						"mensaje" => "Archivo no subido ni guardado"
				);
			}
		}

		$envio = "";
		foreach ($info as $key) {
			$envio .= "Archivo : ".$key['archivo']." - ".$key["mensaje"]."\n";
		}
		echo $envio;
		
	}
}
