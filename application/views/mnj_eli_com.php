<?php 
    $id_compra=$this->uri->segment(3);
?>
      <div class="vista-dere">
		<div id="mensaje">
           <br>
            <p>ELIMINACION DE COMPRA</p>
            <br>
			<h2>(*)ESTA SEGURO DE ELIMINAR ESTA COMPRA?</h2>
			<br>
			<a href="http://localhost/mitienda/index.php/Ccompra/eliminar_compra/<?php echo $id_compra;?>"><input class="btn-blue" type="button" value="ELIMINAR"></a>
			<a href="http://localhost/mitienda/index.php/Ccompra/ver_compra"><input class="btn-red" type="button" value="CANCELAR"></a>
		</div>

</div>
</div>