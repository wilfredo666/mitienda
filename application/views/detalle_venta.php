<?php 
$producto=$detalle_venta[0]->nombre_producto;
$cliente=$detalle_venta[0]->nombre;
$cantidad=$detalle_venta[0]->cantidad_vent;
$total=$detalle_venta[0]->total_ven;
$pago=$detalle_venta[0]->pago_ven;
$cambio=$detalle_venta[0]->cambio_ven;

?>
<div class="vista-dere">
    <div class="detalle">
        <br>
        <table>
            <tr>
                <td><h2>Cliente:</h2></td>
                <td><p><?php echo $cliente;?></p></td>
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

        </table>
        <br>
        <a href="javascript:history.back()"> << Volver Atrás</a>
    </div>

</div>
</div>