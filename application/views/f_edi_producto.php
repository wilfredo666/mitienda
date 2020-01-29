<?php
$id_producto=$producto[0]->id_producto;
$nombre_producto=$producto[0]->nombre_producto;
$cantidad=$producto[0]->cantidad;
$detalle=$producto[0]->detalle;
$precio_compra=$producto[0]->precio_compra;
$precio_venta=$producto[0]->precio_venta;

?>
   <div class="vista-dere">
    <div class="form-reg">
        <form action="http://localhost/mitienda/index.php/Cproducto/g_edi_producto/<?php echo $id_producto;?>" method="post">
            <h2>EDITAR PRODUCTO</h2>
            <p>(*)DEBE LLENAR TODOS LOS CAMPOS</p>
            <input type="text" name="nom_producto" value="<?php echo $nombre_producto;?>">
            <input type="number" name="cantidad" value="<?php echo $cantidad;?>">
            <input type="text"  name="detalle" value="<?php echo $detalle;?>">
            <input type="number"  name="pre_compra" value="<?php echo $precio_compra;?>">
            <input type="number"  name="pre_venta" value="<?php echo $precio_venta;?>">
            <div class="sec-btn">
                <input type="submit" value="GUARDAR">
                <input type="button" onclick="history.back()" style="background-color: red;" value="CANCELAR">
            </div>
        </form>  
    </div>

</div>
</div>
