<?php
$producto=$compra[0]->nombre_producto;
$proveedor=$compra[0]->empresa;
$id_compra=$compra[0]->id_compra;
$cantidad=$compra[0]->cantidad_com;
$precio=$compra[0]->precio_com;
$total=$compra[0]->total_com;
$pago=$compra[0]->pago_com;
$cambio=$compra[0]->cambio_com;
?>
<div class="vista-dere">
    <div class="form-reg">
        <form action="http://localhost/mitienda/index.php/Ccompra/g_edi_compra/<?php echo $id_compra;?>" method="post">
            <h2>EDITAR COMPRA</h2>
            <p>(*)DEBE LLENAR TODOS LOS CAMPOS</p>
            <select name="producto">
                <option value=""><?php echo $producto;?></option>
            </select>
            <select name="proveedor">
                <option value=""><?php echo $proveedor;?></option>
            </select>
            <input type="number" placeholder="Cantidad" name="cantidad" value="<?php echo $cantidad;?>" required>
            <input type="number" placeholder="Precio de compra" name="precio_com" value="<?php echo $precio;?>" required>
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
