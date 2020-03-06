<div id="lista_item">
    <div class="vista_dere">
        <div id="lista_productos">
            <?php
            if(isset($dato)){
                echo '<h4>RESULTADOS DE BUSQUEDA PARA "'.$dato.'"</h4>' ;
            }
            ?>

            <table>
                <thead class="tb-head">
                    <tr>
                        <td>Producto</td>
                        <td>Cantidad</td>
                        <td>Detalle</td>
                        <td>Precio C</td>
                        <td>Precio V</td>
                        <td>Fecha</td>
                        <td colspan="3">Opciones</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($lista_productos as $producto){
                        $id_producto=$producto->id_producto;
                        $nombre_producto=$producto->nombre_producto;
                        $cantidad=$producto->cantidad;
                        $detalle=$producto->detalle;
                        $precioC=$producto->precio_compra;
                        $preciaV=$producto->precio_venta;
                        $fecha=$producto->fecha;
                    ?>

                    <tr>
                        <td><?php echo $nombre_producto;?></td>
                        <td><?php echo $cantidad;?></td>
                        <td><?php echo $detalle;?></td>
                        <td><?php echo $precioC;?></td>
                        <td><?php echo $preciaV;?></td>
                        <td><?php echo $fecha;?></td>
                        <td>
                        <a href="http://localhost/mitienda/index.php/Cproducto/detalle_producto/<?php echo $id_producto;?>"><input class="btn-blue-min" type="button" value="Ver"></a></td>
                        <td><input class="btn-green-min" type="button" value="Editar" onclick="MEditProducto(<?php echo $id_producto;?>)"></td>
                        <td><input class="btn-red-min" type="button" value="Eliminar" onclick="MEliProducto(<?php echo $id_producto;?>);"></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>

            </table>
        </div>
    </div>
</div>

</div>