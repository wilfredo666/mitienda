<div class="vista-dere">
    <div class="form-reg">
        <form action="http://localhost/mitienda/index.php/Cventa/registrar_venta" method="post">
            <h2>REGISTRO DE VENTA</h2>
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
            <select name="cliente">
                <option value="">Seleccionar cliente</option>
                <?php 
                foreach($lista_cliente as $cliente){
                    $id_cliente=$cliente->id_cliente;
                    $nom_cliente=$cliente->nombre;
                ?>
                <option value="<?php echo $id_cliente;?>"><?php echo $nom_cliente;?></option>
                <?php
                }
                ?>
            </select>
            <input type="number" placeholder="Cantidad" name="cantidad" required>
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
