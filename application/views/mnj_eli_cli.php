<?php 
    $id_cliente=$this->uri->segment(3);
?>
      <div class="vista-dere">
		<div id="mensaje">
           <br>
            <p>ELIMINACION DEL CLIENTE</p>
            <br>
			<h2>(*)ESTA SEGURO DE ELIMINAR ESTE CLIENTE ?</h2>
			<br>
			<a href="http://localhost/mitienda/index.php/Ccliente/eliminar_cliente/<?php echo $id_cliente;?>"><input class="btn-blue" type="submit" value="ELIMINAR"></a>
			<a href="http://localhost/mitienda/index.php/Cproducto/ver_productos"><input class="btn-red" type="submit" value="CANCELAR"></a>
		</div>

</div>
</div>
