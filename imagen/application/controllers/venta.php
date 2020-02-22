<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class venta extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mventa');
    }
   
	public function index()
	{
        $data = array('ventas' => $this->MVenta->getVenta());

		$this->load->view('header');
		$this->load->view('venta/Venta',$data);
		$this->load->view('assets/Footer'); 
	}

	public function registrarVenta()
	{
		$data = array('productos' => $this->MVenta->getProductos(),
			'clientes' => $this->MVenta->getCliente());
		
		$this->load->view('header');
		$this->load->view('venta/Registro',$data);
		$this->load->view('footer'); 
	}

	public function agregarProducto()
	{
		$id_producto = trim($_POST['id_producto']);
		$cantidad_p = trim($_POST['cantidad_p']);
		$productos = $this->MVenta->getProducto($id_producto);
		
		$id_producto = $productos[0]->id_producto;
		$portada_p = $productos[0]->portada_p;
		$nombre_p = $productos[0]->nombre_p;
		$detalle_p = $productos[0]->detalle_p;
		$precio_p = $productos[0]->precio_p;

    ?>
		
		<script type="text/javascript">
		
		item('<?php echo $id_producto; ?>',
			 '<?php echo $nombre_p; ?>',
			 '<?php echo $portada_p; ?>',
			 '<?php echo $detalle_p; ?>',
			 '<?php echo $cantidad_p; ?>',
			 '<?php echo $precio_p; ?>');	

		</script>
    <?php
	}

	public function agregarVenta()
	{
		$id_cliente = trim($_POST['id_cliente']);  
	    $total_v = trim($_POST['total_v']);
	    $pago_v = trim($_POST['pago_v']);
	    $cambio_v = trim($_POST['cambio_v']);
	    $fecha = date('Y-m-d');
	    $hora = date('H:i:s');
 
	    $data = array(

	    'id_cliente' => $id_cliente, 
		'total_v' => $total_v, 
		'pago_v' => $pago_v,  
		'cambio_v' => $cambio_v, 
		'fecha_v' => $fecha,
		'hora_v' => $hora,
		'estado_v' =>1  
 
	    );
 
        $dventas = json_decode($_POST['lista_venta']);

        //print_r($dventas);

        $venta = $this->MVenta->registrarVenta($data);
        $ult_venta = $this->MVenta->getIDVenta();
        echo "id_venta = "; echo $id_venta = $ult_venta[0]->id_venta;
        echo "</br>";

        foreach ($dventas as $dventa) 
        {
        	$id_producto = $dventa->id_producto;
			$producto = $dventa->producto;
			$portada = $dventa->portada;
			$descripcion = $dventa->descripcion;
			$cantidad_v = $dventa->cantidad;
			$precio_v = $dventa->precio;
			$subtotal = $cantidad_v*$precio_v;
          
			$data1 = array(
				'id_venta' => $id_venta,
				'id_cliente' => $id_cliente, 
				'id_producto' => $id_producto, 	
				'cantidad_v' => $cantidad_v, 	
				'precio_v' => $precio_v, 	
				'subtotal' => $subtotal,
				'estado_dv' => 1 
		    );
 
		    $this->MVenta->registrarDetalleVenta($data1);
       	 
         }
		?>
       <script type="text/javascript">
       	 location.href="http://localhost/venta_brosteria/CVenta/";
       </script>
		<?php
       //header("Location:http://localhost/venta_brosteria/CVenta/");
	} 

	public function detalleVenta($id_venta)
	{
		$data = array('ventas' => $this->MVenta->getVentas($id_venta));

		$this->load->view('assets/Header');
		$this->load->view('venta/VDetalle',$data);
		$this->load->view('assets/Footer'); 		
	}

	public function editarVenta($id_venta)
	{
		$data = array('ventas' => $this->MVenta->getVentas($id_venta));
         
		$this->load->view('assets/Header');
		$this->load->view('venta/VEditar',$data);
		$this->load->view('assets/Footer'); 		
	}

	public function cambiarDetalleVenta()
	{
      $id_detalle_venta = trim($_POST['id_detalle_venta']);
      $cantidad_n = trim($_POST['cantidad']);

      $dventa = $this->MVenta->getDetalleVenta($id_detalle_venta);
      $id_venta = $dventa[0]->id_venta; 
      $precio_v = $dventa[0]->precio_v;
      $id_venta = $dventa[0]->id_venta;
      $subtotal_n =  $cantidad_n*$precio_v;

      $data = array(
				'id_venta' => $id_venta,
				'cantidad_v' => $cantidad_n, 	
				'subtotal' => $subtotal_n,
				'estado_dv' => 1 
		    );
 
	  $this->MVenta->editarDetalleVenta($data,$id_detalle_venta); 

	  $ventas = $this->MVenta->getDetalleVentaSuma($id_venta);
      $total = 0;
	  foreach ($ventas as $venta) 
	  {
	  	$subtotal = $venta->subtotal;
	  	$total = $total + $subtotal;
	  }
 
	  $venta_n = $this->MVenta->getVentaEditar($id_venta);
 
	  $total_v = $venta_n[0]->total_v; 
	  $pago = $venta_n[0]->pago_v;
	  $cambio = $venta_n[0]->cambio_v;

	  $cambio_n = $total - $pago; 

      $data = array(
		'total_v' => $total,   
		'cambio_v' => $cambio_n, 
	    );

      $this->MVenta->getGuardarVenta($data,$id_venta);

	}

	public function eliminarDetalleVenta()
	{
		
	  $id_detalle_venta = trim($_POST['id_detalle_venta']);

	  $dventa = $this->MVenta->getDetalleVenta($id_detalle_venta);
      $id_venta = $dventa[0]->id_venta; 
	  $this->MVenta->eliminarDetalleVenta($id_detalle_venta);

	  $ventas = $this->MVenta->getDetalleVentaSuma($id_venta);
      $total = 0;
	  foreach ($ventas as $venta) 
	  {
	  	$subtotal = $venta->subtotal;
	  	$total = $total + $subtotal;
	  }

	  $venta_n = $this->MVenta->getVentaEditar($id_venta);
 
	  $total_v = $venta_n[0]->total_v; 
	  $pago = $venta_n[0]->pago_v;
	  $cambio = $venta_n[0]->cambio_v;

	  $cambio_n = $total - $pago; 

      $data = array(
		'total_v' => $total,   
		'cambio_v' => $cambio_n, 
	    );

      $this->MVenta->getGuardarVenta($data,$id_venta);
      

	}

	public function eliminarVenta($id_venta)
	{
		$data = array('ventas' => $this->MVenta->getVentas($id_venta));
         
		$this->load->view('assets/Header');
		$this->load->view('venta/VEliminar',$data);
		$this->load->view('assets/Footer');

	}
	
	public function borrarVenta($id_venta)
	{
		$this->MVenta->DeleteVentas($id_venta);
         
        $data = array('ventas' => $this->MVenta->getVenta());

		$this->load->view('assets/Header');
		$this->load->view('venta/VVenta',$data);
		$this->load->view('assets/Footer'); 
	}

	

	public function BuscarVenta()
	{  
        $txt_buscar = trim($_POST['txt_buscar']);
        $data = array('ventas' => $this->MVenta->buscarVenta($txt_buscar));

		$this->load->view('assets/Header');
		$this->load->view('venta/VBuscar',$data);
		$this->load->view('assets/Footer'); 
	}	

}
