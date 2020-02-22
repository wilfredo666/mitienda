<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario extends CI_Controller {

	public function __construct(){
		parent::__construct();
		 $this->load->model('MRegistro_Usuario');
	}

	public function index(){
		$this->load->view('login/loginHeader');
		$this->load->view('usuario');
		$this->load->view('footer');
	}

	public function guardar(){
		// if ($this->input->is_ajax_request()) {
			$nombre = $_POST["nombre"];
			$apellido = $_POST["apellido"];
			$password = $_POST["password"];
			$email = $_POST["email"];
			
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('password', 'Contraseña', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

			$this->form_validation->set_message('nombre', 'El campo %s es necesario');

			if ($this->form_validation->run() == TRUE) {
				$data = [
					"nombre" => $nombre,
					"apellido" => $apellido,
					"password" => sha1($password),
					"email" => $email, 
				];

				if ($this->MRegistro_Usuario->guardar($data) == true) {
					$this->load->view('header');
					$this->load->view('login/Login');
					$this->load->view('footer'); 

				}
				else{
					echo "Error";
				}
			}
			else{
				echo validation_errors("<li>","</li>");
			}

			
		// }
		// else{
		// 	show_404();		
		// }

			
	}
}
?>
