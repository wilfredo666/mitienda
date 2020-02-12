<?php 
$nombre_producto=$detalle_producto[0]->nombre_producto;
$cantidad=$detalle_producto[0]->cantidad;
$detalle=$detalle_producto[0]->detalle;
$precio_compra=$detalle_producto[0]->precio_compra;
$precio_venta=$detalle_producto[0]->precio_venta;
$fecha=$detalle_producto[0]->fecha;
$hora=$detalle_producto[0]->hora;

?>
<div class="vista-dere">
    <div class="detalle">
        <br>
        <table>
            <tr>
                <td><h2>Nombre:</h2></td>
                <td><p><?php echo $nombre_producto;?></p></td>
            </tr>
            <tr>
                <td><h2>Cantidad:</h2></td>
                <td><p><?php echo $cantidad;?></p></td>
            </tr>
            <tr>
                <td><h2>Detalle:</h2></td>
                <td><p><?php echo $detalle;?></p></td>
            </tr>
            <tr>
                <td><h2>Precio de compra:</h2></td>
                <td><p><?php echo $precio_compra;?></p></td>
            </tr>
                        <tr>
                <td><h2>Precio de venta:</h2></td>
                <td><p><?php echo $precio_venta;?></p></td>
            </tr>
                        <tr>
                <td><h2>Fecha y hora de registro:</h2></td>
                <td><p><?php echo $fecha." ".$hora;?></p></td>
            </tr>
        </table>
        <br>
        <a href="http://localhost/mitienda/index.php/Cproducto/ver_productos"> << Volver Atrás</a>
    </div>

</div>
</div>