<?php 
$producto=$detalle_compra[0]->nombre_producto;
$proveedor=$detalle_compra[0]->empresa;
$cantidad=$detalle_compra[0]->cantidad_com;
$precio=$detalle_compra[0]->precio_com;
$total=$detalle_compra[0]->total_com;
$pago=$detalle_compra[0]->pago_com;
$cambio=$detalle_compra[0]->cambio_com;
$fecha=$detalle_compra[0]->fecha;
$hora=$detalle_compra[0]->hora;
?>
<div class="vista-dere">
    <div class="detalle">
        <br>
        <table>
            <tr>
                <td><h2>Cliente:</h2></td>
                <td><p><?php echo $proveedor;?></p></td>
            </tr>
            <tr>
                <td><h2>Producto:</h2></td>
                <td><p><?php echo $producto;?></p></td>
            </tr>
            <tr>
                <td><h2>Cantidad:</h2></td>
                <td><p><?php echo $cantidad;?></p></td>
            </tr>
                        <tr>
                <td><h2>Precio de compra:</h2></td>
                <td><p><?php echo $precio;?></p></td>
            </tr>
            <tr>
                <td><h2>Total:</h2></td>
                <td><p><?php echo $total;?></p></td>
            </tr>
                     <tr>
                <td><h2>Pago:</h2></td>
                <td><p><?php echo $pago;?></p></td>
            </tr>
                     <tr>
                <td><h2>Cambio:</h2></td>
                <td><p><?php echo $cambio;?></p></td>
            </tr>
                               <tr>
                <td><h2>Fecha y hora:</h2></td>
                <td><p><?php echo $fecha." ".$hora;?></p></td>
            </tr>

        </table>
        <br>
        <a href="http://localhost/mitienda/index.php/Ccompra/ver_compra"> << Volver Atrás</a>
    </div>

</div>
</div>