<?php
$producto=$venta[0]->nombre_producto;
$cliente=$venta[0]->nombre;
$id_venta=$venta[0]->id_venta;
$cantidad=$venta[0]->cantidad_vent;
$total=$venta[0]->total_ven;
$pago=$venta[0]->pago_ven;
$cambio=$venta[0]->cambio_ven;
?>
<div class="vista-dere">
    <div class="form-reg">
        <form action="http://localhost/mitienda/index.php/Cventa/g_edi_venta/<?php echo $id_venta;?>" method="post">
            <h2>EDITAR VENTA</h2>
            <p>(*)DEBE LLENAR TODOS LOS CAMPOS</p>
            <select name="producto">
                <option value=""><?php echo $producto;?></option>
            </select>
            <select name="cliente">
                <option value=""><?php echo $cliente;?></option>
            </select>
            <input type="number" placeholder="Cantidad" name="cantidad" value="<?php echo $cantidad;?>" required>
            <input type="number" placeholder="Total" name="total" value="<?php echo $total;?>" required>
            <input type="number" placeholder="Pago" name="pago" value="<?php echo $pago;?>" required>
            <input type="number" placeholder="Cambio" name="cambio" value="<?php echo $cambio;?>" required>
            <div class="sec-btn">
                <input type="submit" value="GUARDAR">
                <input type="button" onclick="history.back()" style="background-color: red;" value="CANCELAR">
            </div>
        </form>  
    </div>

</div>
</div>
