<?php 
    $id_venta=$this->uri->segment(3);
?>
      <div class="vista-dere">
		<div id="mensaje">
           <br>
            <p>ELIMINACION DE VENTA</p>
            <br>
			<h2>(*)ESTA SEGURO DE ELIMINAR ESTA VENTA ?</h2>
			<br>
			<a href="http://localhost/mitienda/index.php/Cventa/eliminar_venta/<?php echo $id_venta;?>"><input class="btn-blue" type="submit" value="ELIMINAR"></a>
			<a href="http://localhost/mitienda/index.php/Cventa/ver_venta"><input class="btn-red" type="button" value="CANCELAR"></a>
		</div>

</div>
</div>
