<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class persona extends CI_Controller {

	public function __construct()
    {
				parent::__construct();
				$this->load->library('pagination');
				$this->load->model('Mpersona');
				$this->perPage = 4;
    }
	public function index()
	{
		$this->load->view('header');
		$this->load->view('persona');
		$this->load->view('footer');
	}

	public function formModal()
	{
		
		$this->load->view('persona');
		
	}

	public function carrito()
	{
		
		$this->load->view('persona');
		
	}
	public function archivo()
	{
		$this->load->view('header');
		$this->load->view('archivos');
		$this->load->view('footer');
	}


	public function lista()
	{
		$config['base_url']    ="http://localhost/pruebaobjeto/persona/lista/" ;
	$config['total_rows']  = $this->Mpersona->num_personas();
	$config['per_page']    = 3;
	$config['uri_segment'] = 3;
	$config['num_links'] = 5;

	$config['full_tag_open'] = '<ul class="pagination">';
	$config['full_tag_close'] = '</ul>';
	$config['first_link'] = false;
	$config['last_link'] = false;
	$config['first_tag_open'] = '<li>';
	$config['first_tag_close'] = '</li>';
	$config['prev_link'] = '&laquo';
	$config['prev_tag_open'] = '<li class="prev">';
	$config['prev_tag_close'] = '</li>';
	$config['next_link'] = '&raquo';
	$config['next_tag_open'] = '<li>';
	$config['next_tag_close'] = '</li>';
	$config['last_tag_open'] = '<li>';
	$config['last_tag_close'] = '</li>';
	$config['cur_tag_open'] = '<li class="active"><a href="#">';
	$config['cur_tag_close'] = '</a></li>';
	$config['num_tag_open'] = '<li>';
	$config['num_tag_close'] = '</li>';
	$this->pagination->initialize($config);
	$result=  $this->Mpersona->get_pagination($config['per_page']);
		$data['personas'] = $result;
		$data['pagination'] = $this->pagination->create_links();
	  $data['listaper']= $this->Mpersona->listaPersona();
		$this->load->view('header');
		$this->load->view('listapersonas',$data);
		$this->load->view('footer');
	}

	 public function guardar(){

		// el metodo normal para guardar
		//El metodo is_ajax_request() de la libreria input permite verificar
		//si se esta accediendo mediante el metodo AJAX 
			//  $nombres = $_POST['nombre'];
			//  $apellidos = $_POST['apellido'];
			//  $edad = $_POST['edad'];

			// $datos = array(
			// 	"nombre" => $nombres,
			// 	"apellido" => $apellidos,
			// 	"edad" => $edad
			// 	);
			// 	// print_r($datos);
		  // $persona= $this->Mpersona->registrarPersona($datos);

			// 	echo "<center>REGISTRO CORRECTO</center>";
			$personas = json_decode($_POST['lista_persona']);
			foreach ($personas as $persona) 
			{
				$nombre = $persona->nombre;
		$apellido = $persona->apellido;
		$edad = $persona->edad;
				
		$data1 = array(
			'nombre' => $nombre,
			'apellido' => $apellido, 
			'edad' => $edad, 	
			);

			$this->Mpersona->registrarPersona($data1);
			echo "<center>REGISTRO CORRECTO</center>";
			 }
			 

}

public function agregarConFoto(){

	// el metodo normal para guardar
	//El metodo is_ajax_request() de la libreria input permite verificar
	// si se esta accediendo mediante el metodo AJAX 
		 $nombres = $_POST['nombre'];
		 $apellidos = $_POST['apellido'];
		 $edad = $_POST['edad'];

		 $archivo = $_FILES['archivo'];
		 $extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);
				 $time = time();
				 $imagen = "foto-$time.$extension";
			 echo $imagen;
			$config['upload_path'] = './fotos/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name'] = $imagen;
			$this->load->library("upload",$config);
			if ($this->upload->do_upload('archivo')) {
				$data = array("upload_data" => $this->upload->data());
				$datos = array(
					"nombre" => $nombres,
					"apellido" => $apellidos,
					"edad" => $edad,
					"foto" => $data['upload_data']['file_name'],
					);
					// print_r($datos);
				$persona= $this->Mpersona->registrarPersona($datos);
		
					echo "<center>REGISTRO CORRECTO</center>";
			}
			else{
				echo $this->upload->display_errors();
			}
		
		
		 

}
public function subir(){
	//El metodo is_ajax_request() de la libreria input permite verificar
		//si se esta accediendo mediante el metodo AJAX 
			 $archivo = $_FILES['file'];
			$extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);
					$time = time();
					$imagen = "img-$time.$extension";
 
					$ruta = "./fotos/".$imagen;
	
					move_uploaded_file($_FILES["file"]["tmp_name"], $ruta);

}
public function eliminar()
	{
		$id = $_POST['id_persona'];
		$eliminar = $this->Mpersona->delete($id);

				echo 	"<center>SE ELIMINO CORRECTAMENTE</>";
			
	}
	public function editar($id_persona)
	{
			$data = array('personas'=> $this->Mpersona->editarPersona($id_persona));

			if(sizeof($data)>0){
				$this->load->view('header');
				$this->load->view('Veditar', $data);
				$this->load->view('footer');
			}
	}
	public function editarModal()
	{
		$id = $_POST['id_persona'];
			$data = array('personas'=> $this->Mpersona->editarPersona($id));

			if(sizeof($data)>0){
				
				$this->load->view('Veditar', $data);
			
			}
	}
	public function cambiar()
	{
		$id=$_POST['id_persona'];
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$edad=$_POST['edad'];
		
		$data = array(
									//	'id_diario'=>
									'nombre'=>$nombre,
									'apellido'=> $apellido,
									'edad'=> $edad,
		);

			$editar = $this->Mpersona->update($data,$id);

		   echo "<center>EDICCION CORRECTA</center>";
	}
	public function listarbusqueda()
	{
		$nombre= $_POST['nombre'];
		
		$data = array('personas'=> $this->Mpersona->search($nombre));
		$this->load->view('resultado', $data);
	}

	}
?>
