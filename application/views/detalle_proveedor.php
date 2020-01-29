<?php 
$empresa=$detalle_proveedor[0]->empresa;
$encargado=$detalle_proveedor[0]->encargado;
$celular=$detalle_proveedor[0]->celular_prov;
$direccion=$detalle_proveedor[0]->direccion_prov;

?>
<div class="vista-dere">
    <div class="detalle">
        <br>
        <table>
            <tr>
                <td><h2>Empresa:</h2></td>
                <td><p><?php echo $empresa;?></p></td>
            </tr>
            <tr>
                <td><h2>Encargado:</h2></td>
                <td><p><?php echo $encargado;?></p></td>
            </tr>
            <tr>
                <td><h2>Celular:</h2></td>
                <td><p><?php echo $celular;?></p></td>
            </tr>
            <tr>
                <td><h2>Direccion:</h2></td>
                <td><p><?php echo $direccion;?></p></td>
            </tr>

        </table>
        <br>
        <a href="javascript:history.back()"> << Volver Atrás</a>
    </div>

</div>
</div>