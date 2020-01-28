<?php 
$nombre_cliente=$detalle_cliente[0]->nombre;
$apellido=$detalle_cliente[0]->apellido;
$ci_nit=$detalle_cliente[0]->ci_nit;
$celular_cli=$detalle_cliente[0]->celular_cli;
$direccion_cli=$detalle_cliente[0]->direccion_cli;


?>
<div class="vista-dere">
    <div class="detalle">
        <br>
        <table>
            <tr>
                <td><h2>Nombre:</h2></td>
                <td><p><?php echo $nombre_cliente;?></p></td>
            </tr>
            <tr>
                <td><h2>Apellido:</h2></td>
                <td><p><?php echo $apellido;?></p></td>
            </tr>
            <tr>
                <td><h2>CI / NIT:</h2></td>
                <td><p><?php echo $ci_nit;?></p></td>
            </tr>
            <tr>
                <td><h2>Celular:</h2></td>
                <td><p><?php echo $celular_cli;?></p></td>
            </tr>
                        <tr>
                <td><h2>Direccion:</h2></td>
                <td><p><?php echo $direccion_cli;?></p></td>
            </tr>

        </table>
        <br>
    </div>

</div>
</div>