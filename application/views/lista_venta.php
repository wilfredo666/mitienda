<div class="vista-dere">
    <div id="busc-producto">
        <nav>
            <ul>
                <form method="post" action="http://localhost/mitienda/index.php/Cventa/buscar_venta">
                    <li><input class="input-text" type="text" placeholder="Buscar venta" name="valor_bus"></li>
                    <li><input class="btn-green" type="submit" value="Buscar"></li>
                    <li style="float: right;"><a  href="http://localhost/mitienda/index.php/Cventa/f_reg_venta"><input class="btn-blue" type="button" value="Nuevo"></a></li>
                </form>

            </ul>
        </nav>
    </div>

    <div id="lista-productos">
                   <?php
            if(isset($dato)){
                echo '<h2>RESULTADOS DE BUSQUEDA PARA "'.$dato.'"</h2>' ;
                echo '<a href="http://localhost/mitienda/index.php/Cventa/ver_venta">Listar Ventas</a>';
            }
            ?>
        <table>
            <thead class="tb-head">
                <tr>
                    <td>Producto</td>
                    <td>Cliente</td>
                    <td>Cantidad</td>
                    <td>Total</td>
                    <td>Pago</td>
                    <td>Cambio</td>
                    <td colspan="3">Opciones</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($lista_venta as $venta){
                    $id_venta=$venta->id_venta;
                    $id_producto=$venta->id_producto;
                    $id_cliente=$venta->id_cliente;
                    $producto=$venta->nombre_producto;
                    $cliente=$venta->nombre;
                    $cantidad=$venta->cantidad_vent;
                    $total=$venta->total_ven;
                    $pago=$venta->pago_ven;
                    $cambio=$venta->cambio_ven;
                ?>
                <tr>
                    <td><?php echo $producto;?></td>
                    <td><?php echo $cliente;?></td>
                    <td><?php echo $cantidad;?></td>
                    <td><?php echo $total;?></td>
                    <td><?php echo $pago;?></td>
                    <td><?php echo $cambio;?></td>
                    <td><a href="http://localhost/mitienda/index.php/Cventa/detalle_venta/<?php echo $id_venta;?>"><input class="btn-blue-min" type="button" value="Ver"></a></td>
                    <td><a href="http://localhost/mitienda/index.php/Cventa/f_editar_venta/<?php echo $id_venta;?>"><input class="btn-green-min" type="button" value="Editar"></a></td>
                    <td><a href="http://localhost/mitienda/index.php/Cventa/f_eliminar_venta/<?php echo $id_venta;?>"><input class="btn-red-min" type="button" value="Eliminar"></a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>

        </table>
    </div>
</div>


</div>