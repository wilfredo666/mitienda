<div class="vista-dere">
    <div class="form-reg">
        <form action="http://localhost/mitienda/index.php/Ccompra/registrar_compra" method="post">
            <h2>REGISTRO DE COMPRA</h2>
            <p>(*)DEBE LLENAR TODOS LOS CAMPOS</p>
            <select name="producto">
                <option value="">Seleccionar producto</option>
                <?php 
                foreach($lista_producto as $producto){
                    $id_producto=$producto->id_producto;
                    $nom_producto=$producto->nombre_producto;
                    $cantidad=$producto->cantidad;
                ?>
                <option value="<?php echo $id_producto;?>-<?php echo $cantidad;?>"><?php echo $nom_producto;?></option>
                <?php
                }
                ?>
            </select>
            <select name="proveedor">
                <option value="">Seleccionar proveedor</option>
                <?php 
                foreach($lista_proveedor as $proveedor){
                    $id_proveedor=$proveedor->id_proveedor;
                    $nom_proveedor=$proveedor->empresa;
                ?>
                <option value="<?php echo $id_proveedor;?>"><?php echo $nom_proveedor;?></option>
                <?php
                }
                ?>
            </select>
            <input type="number" placeholder="Cantidad" name="cantidad" required>
            <input type="number" placeholder="Precio de compra" name="precio_com" required step=".01">
            <input type="number" placeholder="Total" name="total" required step=".01">
            <input type="number" placeholder="Pago" name="pago" required step=".01">
            <input type="number" placeholder="Cambio" name="cambio" required step=".01"> 
            <div class="sec-btn">
                <input type="submit" value="REGISTRAR">
                <input type="button" onclick="history.back()" style="background-color: red;" value="CANCELAR">
            </div>
        </form>  
    </div>

</div>
</div>
