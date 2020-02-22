<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('America/La_Paz');

class Cproducto extends CI_Controller {
    function __construct(){
        parent:: __construct(); 
        $this->load->model('Mmitienda');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    function ver_productos(){
        $datos=array('lista_productos'=>$this->Mmitienda->listar_productos());
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('header_lista');
        $this->load->view('lista_productos',$datos);
        $this->load->view('footer');
    }
    function mover_archivo(){
      /*  if (isset($_FILES['file'])) 
        {
            $archivo = $_FILES['file'];
            $extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);
            $time = time();
            $nombre = "img-$time.$extension";
            if (move_uploaded_file($archivo['tmp_name'], "/$nombre")) {

                echo $nombre;
?>

<?php
            } else {
                echo 0;
            }
        }*/
        echo "Hola mundo";
    }
    function f_registro_producto(){
        $this->load->view('f_reg_producto');
    }
    function registrar_producto(){

        echo $nom_producto=trim($_POST['nom_producto']);
        echo $cantidad=trim($_POST['cantidad']);
        echo $detalle=trim($_POST['detalle']);
        echo $pre_compra=trim($_POST['pre_compra']);
        echo $pre_venta=trim($_POST['pre_venta']);

        echo $portada_p = trim($_FILES['imagen']['id']);

        $fecha=date("Y")."-".date("m")."-".date("d");
        $hora=date("H").":".date("i");
        //*************datos para el registro de imagen**********
        $archivo = $_FILES['imagen'];//obtencion del archivo del input por nombre
        $extension = pathinfo($archivo['id'], PATHINFO_EXTENSION);//obtencion de la extencion del archivo

        $imagen = "prod-$fecha.$hora.$extension";//se da un nombre al archivo concatenando prefijo-tiempo-extencion
        $ruta = "./portada/".$imagen;//se declara una ruta para que la imagen se guarde ahi

        move_uploaded_file($_FILES["imgen"]["tmp_name"], $ruta);//se ejecuta la sentencia que subira el archivo



        $datos=array(
            'nombre_producto'=>$nom_producto,
            'cantidad'=>$cantidad,
            'detalle'=>$detalle,
            'precio_compra'=>$pre_compra,
            'precio_venta'=>$pre_venta,
            'fecha'=>$fecha,
            'hora'=>$hora,
            'portada_p'=>$imagen
        );

        $this->Mmitienda->registrar_producto($datos);

        echo "<center class='alert alert-success'>Producto registrado con exito !!!</center>";

    } 
    function f_editar_producto(){

        $id_producto=$this->uri->segment(3);
        $producto=array('producto'=>$this->Mmitienda->f_edi_producto($id_producto));
        $this->load->view('f_edi_producto',$producto);
    }
    function g_edi_producto(){
        $id_producto=$this->uri->segment(3);
        $nom_producto=trim($_POST['nom_producto']);
        $cantidad=trim($_POST['cantidad']);
        $detalle=trim($_POST['detalle']);
        $pre_compra=trim($_POST['pre_compra']);
        $pre_venta=trim($_POST['pre_venta']);

        $datos=array(
            'nombre_producto'=>$nom_producto,
            'cantidad'=>$cantidad,
            'detalle'=>$detalle,
            'precio_compra'=>$pre_compra,
            'precio_venta'=>$pre_venta
        );

        $this->Mmitienda->g_edi_producto($datos,$id_producto);
        echo "<center class='alert alert-success'>Producto actualizado con exito !!!</center>";

    }
    function f_eliminar_producto(){
        $this->load->view('mnj_eli_pro');
    }
    function eliminar_producto(){
        $id_producto=trim($_POST['id_producto']);
        $this->Mmitienda->eli_producto($id_producto);
        echo "<center class='alert alert-success'>Producto eliminado con exito !!!</center>";
    }
    function detalle_producto(){
        $id_producto=$this->uri->segment(3);
        $datos=array('detalle_producto'=>$this->Mmitienda->detalle_producto($id_producto));
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('detalle_producto',$datos);
        $this->load->view('footer');
    }
    function buscar_producto(){
        $dato=trim($_POST['valor_bus']);
        $producto=array(
            'dato'=>$dato,
            'lista_productos'=>$this->Mmitienda->buscar_producto($dato));
        $this->load->view('lista_productos',$producto,$dato);
    }
}
?>