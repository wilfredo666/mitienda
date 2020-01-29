<?php 
    $id_proveedor=$this->uri->segment(3);
?>
      <div class="vista-dere">
		<div id="mensaje">
           <br>
            <p>ELIMINACION DEL PROVEEDOR</p>
            <br>
			<h2>(*)ESTA SEGURO DE ELIMINAR ESTE PROVEEDOR ?</h2>
			<br>
			<a href="http://localhost/mitienda/index.php/Cproveedor/eliminar_proveedor/<?php echo $id_proveedor;?>"><input class="btn-blue" type="submit" value="ELIMINAR"></a>
			<a href="http://localhost/mitienda/index.php/Cproveedor/ver_proveedor"><input class="btn-red" type="button" value="CANCELAR"></a>
		</div>

</div>
</div>
