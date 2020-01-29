<div class="vista-dere">
    <div id="busc-producto">
        <nav>
            <ul>
                <form method="post" action="http://localhost/mitienda/index.php/Ccompra/buscar_compra">
                    <li><input class="input-text" type="text" placeholder="Buscar compra" name="valor_bus"></li>
                    <li><input class="btn-green" type="submit" value="Buscar"></li>
                    <li style="float: right;"><a  href="http://localhost/mitienda/index.php/Ccompra/f_reg_compra"><input class="btn-blue" type="button" value="Nuevo"></a></li>
                </form>

            </ul>
        </nav>
    </div>

    <div id="lista-productos">
        <table>
            <thead class="tb-head">
                <tr>
                    <td>Producto</td>
                    <td>Cantidad</td>
                    <td>Proveedor</td>
                    <td>Precio de compra</td>
                    <td>Total</td>
                    <td>Pago</td>
                    <td>Cambio</td>
                    <td colspan="3">Opciones</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($lista_compra as $compra){
                    $id_compra=$compra->id_compra;                    
                    $producto=$compra->nombre_producto;
                    $cantidad=$compra->cantidad_com;
                    $proveedor=$compra->empresa;
                    $precio=$compra->precio_com;
                    $total=$compra->total_com;
                    $pago=$compra->pago_com;
                    $cambio=$compra->cambio_com;
                ?>
                <tr>
                    <td><?php echo $producto;?></td>
                    <td><?php echo $cantidad;?></td>
                    <td><?php echo $proveedor;?></td>
                    <td><?php echo $precio;?></td>
                    <td><?php echo $total;?></td>
                    <td><?php echo $pago;?></td>
                    <td><?php echo $cambio;?></td>
                    <td><a href="http://localhost/mitienda/index.php/Ccompra/detalle_compra/<?php echo $id_compra;?>"><input class="btn-blue-min" type="button" value="Ver"></a></td>
                    <td><a href="http://localhost/mitienda/index.php/Ccompra/f_editar_compra/<?php echo $id_compra;?>"><input class="btn-green-min" type="button" value="Editar"></a></td>
                    <td><a href="http://localhost/mitienda/index.php/Ccompra/f_eliminar_compra/<?php echo $id_compra;?>"><input class="btn-red-min" type="button" value="Eliminar"></a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>

        </table>
    </div>
</div>


</div>