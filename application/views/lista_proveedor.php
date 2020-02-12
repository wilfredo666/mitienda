<div class="vista-dere">
        <div id="busc-producto">
            <nav>
                <ul>
                    <form method="post" action="http://localhost/mitienda/index.php/Cproveedor/buscar_proveedor">
                        <li><input class="input-text" type="text" placeholder="Buscar proveedor" name="valor_bus"></li>
                        <li><input class="btn-green" type="submit" value="Buscar"></li>
                        <li style="float: right;"><a  href="http://localhost/mitienda/index.php/Cproveedor/f_reg_proveedor"><input class="btn-blue" type="button" value="Nuevo"></a></li>
                    </form>
                    
                </ul>
            </nav>
        </div>

    <div id="lista-productos">
       <?php
            if(isset($dato)){
                echo '<h2>RESULTADOS DE BUSQUEDA PARA "'.$dato.'"</h2>' ;
                echo '<a href="http://localhost/mitienda/index.php/Cproveedor/ver_proveedor">Listar Proveedores</a>';
            }
            ?>
        <table>
            <thead class="tb-head">
                <tr>
                    <td>Empresa</td>
                    <td>Encargado</td>
                    <td>Celular</td>
                    <td>Direccion</td>
                    <td colspan="3">Opciones</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($lista_proveedores as $proveedor){
                    $id_proveedor=$proveedor->id_proveedor;
                    $empresa=$proveedor->empresa;
                    $encargado=$proveedor->encargado;
                    $celular=$proveedor->celular_prov;
                    $direccion=$proveedor->direccion_prov;
                ?>
                <tr>
                    <td><?php echo $empresa;?></td>
                    <td><?php echo $encargado;?></td>
                    <td><?php echo $celular;?></td>
                    <td><?php echo $direccion;?></td>
                    <td><a href="http://localhost/mitienda/index.php/Cproveedor/detalle_proveedor/<?php echo $id_proveedor;?>"><input class="btn-blue-min" type="button" value="Ver"></a></td>
                    <td><a href="http://localhost/mitienda/index.php/Cproveedor/f_editar_proveedor/<?php echo $id_proveedor;?>"><input class="btn-green-min" type="button" value="Editar"></a></td>
                    <td><a href="http://localhost/mitienda/index.php/Cproveedor/f_eliminar_proveedor/<?php echo $id_proveedor;?>"><input class="btn-red-min" type="button" value="Eliminar"></a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>

        </table>
    </div>
</div>


</div>