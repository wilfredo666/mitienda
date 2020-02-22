<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class producto extends CI_Controller {

	public function __construct()
    {
				parent::__construct();
				$this->load->model('Mproducto');
			
    }
	public function index()
	{
	
		$this->load->view('producto/producto');
		
	}
	public function agregarProducto()
	{
		$nombre = trim($_POST['nombre']);
		$detalle = trim($_POST['detalle']);
		$precio = trim($_POST['precio']);
		$productos = $this->MVenta->registrar();
		
		$nombre = $productos[0]->nombre;
		$detalle = $productos[0]->detalle;
		$precio = $productos[0]->precio;

    ?>
		
		<script type="text/javascript">
		
		item('<?php echo $nombre; ?>',
			 '<?php echo $detalle; ?>',
			 '<?php echo $precio; ?>');	

		</script>
    <?php
	}




	

	}
?>
