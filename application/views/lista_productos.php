<div class="vista-dere">
    <form action="">
        <div id="busc-producto">
            <nav>
                <ul>
                    <li><input class="input-text" type="text"></li>
                    <li><input class="btn-green" type="submit" value="Buscar"></li>
                    <li style="float: right;">
                        <a  href="http://localhost/mitienda/index.php/Cproducto/f_registro_producto"><input class="btn-blue" type="button" value="Nuevo"></a></li>
                </ul>
            </nav>
        </div>
    </form>

    <div id="lista-productos">
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
                    <td><a href=""><input type="button" value="Ver"></a></td>
                    <td><a href=""><input type="button" value="Editar"></a></td>
                    <td><a href=""><input type="button" value="Eliminar"></a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>

        </table>
    </div>
</div>


</div>