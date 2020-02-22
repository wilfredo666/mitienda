<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
       $this->load->model('MLogin');
    }
   
	public function index()
	{
		$this->load->view('login/loginHeader');
		$this->load->view('login/Login');
	}

	public function validar()
	{
		 		 $email = trim($_POST['email']);
				 $password = trim($_POST['password']);

				$user_model =  $this->MLogin->verificar($email,$password);
				// print_r($user_model);
				$size = sizeof($user_model);

				if ($size>0) 
			 	{

					$id_usuario = $user_model[0]->id_usuario;
					$nombre = $user_model[0]->nombre;
					$apellido = $user_model[0]->apellido;
					$password = $user_model[0]->password;
					$email = $user_model[0]->email;

          $data_session = array(
         
					 'id_usuario' => $id_usuario, 
	         'nombre'   => $nombre, 
	         'apellido' => $apellido,
					 'password'  => $password,
					 'email'     => $email
		  );

		  $this->session->set_userdata($data_session); 
		  
          header("Location:http://localhost/pruebaobjeto/login/menu");
 
         }
         else{
              
							 header("Location:http://localhost/pruebaobjeto/login/");
					
         }

 

	}

	public function salir()
	{
 
       $this->session->sess_destroy();
       header("Location:http://localhost/pruebaobjeto/login/");

    }

		public function menu()
		{
			$this->load->view('header');
			$this->load->view('persona');
			$this->load->view('footer');
	
			}
 
	 
}
