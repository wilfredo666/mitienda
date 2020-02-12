<div class="vista-dere">
        <div id="busc-producto">
            <nav>
                <ul>
                    <form method="post" action="http://localhost/mitienda/index.php/Ccliente/buscar_cliente">
                        <li><input class="input-text" type="text" placeholder="Buscar cliente" name="valor_bus"></li>
                        <li><input class="btn-green" type="submit" value="Buscar"></li>
                        <li style="float: right;"><a  href="http://localhost/mitienda/index.php/Ccliente/f_reg_cliente"><input class="btn-blue" type="button" value="Nuevo"></a></li>
                    </form>
                    
                </ul>
            </nav>
        </div>

    <div id="lista-productos">
       <?php
            if(isset($dato)){
                echo '<h2>RESULTADOS DE BUSQUEDA PARA "'.$dato.'"</h2>' ;
                echo '<a href="http://localhost/mitienda/index.php/Ccliente/ver_cliente">Listar Clientes</a>';
            }
            ?>
        <table>
            <thead class="tb-head">
                <tr>
                    <td>Nombre(s)</td>
                    <td>Apellido(s)</td>
                    <td>CI / NIT</td>
                    <td>Celular</td>
                    <td>Direccion</td>
                    <td colspan="3">Opciones</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($lista_clientes as $clientes){
                    $id_cliente=$clientes->id_cliente;
                    $nombre=$clientes->nombre;
                    $apellido=$clientes->apellido;
                    $ci_nit=$clientes->ci_nit;
                    $celular_cli=$clientes->celular_cli;
                    $direccion_cli=$clientes->direccion_cli;
                ?>
                <tr>
                    <td><?php echo $nombre;?></td>
                    <td><?php echo $apellido;?></td>
                    <td><?php echo $ci_nit;?></td>
                    <td><?php echo $celular_cli;?></td>
                    <td><?php echo $direccion_cli;?></td>
                    <td><a href="http://localhost/mitienda/index.php/Ccliente/detalle_cliente/<?php echo $id_cliente;?>"><input class="btn-blue-min" type="button" value="Ver"></a></td>
                    <td><a href="http://localhost/mitienda/index.php/Ccliente/f_editar_cliente/<?php echo $id_cliente;?>"><input class="btn-green-min" type="button" value="Editar"></a></td>
                    <td><a href="http://localhost/mitienda/index.php/Ccliente/f_eliminar_cliente/<?php echo $id_cliente;?>"><input class="btn-red-min" type="button" value="Eliminar"></a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>

        </table>
    </div>
</div>


</div>