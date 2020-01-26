<?php 
    $id_producto=$this->uri->segment(3);
?>
      <div class="vista-dere">
		<div id="mensaje">
           <br>
            <p>ELIMINACION DEL PRODUCTO</p>
            <br>
			<h2>(*)ESTA SEGURO DE ELIMINAR ESTE PRODUCTO ?</h2>
			<br>
			<a href="http://localhost/mitienda/index.php/Cproducto/eliminar_producto/<?php echo $id_producto;?>"><input class="btn-blue" type="submit" value="ELIMINAR"></a>
			<a href="http://localhost/mitienda/index.php/Cproducto/ver_productos"><input class="btn-red" type="submit" value="CANCELAR"></a>
		</div>

</div>
</div>
