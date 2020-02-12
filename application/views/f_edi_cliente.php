<?php
$id_cliente=$cliente[0]->id_cliente;
$nombre_cliente=$cliente[0]->nombre;
$apellido=$cliente[0]->apellido;
$ci_nit=$cliente[0]->ci_nit;
$celular_cli=$cliente[0]->celular_cli;
$direccion_cli=$cliente[0]->direccion_cli;

?>
   <div class="vista-dere">
    <div class="form-reg">
        <form action="http://localhost/mitienda/index.php/Ccliente/g_edi_cliente/<?php echo $id_cliente;?>" method="post">
            <h2>EDITAR CLIENTE</h2>
            <p>(*)DEBE LLENAR TODOS LOS CAMPOS</p>
            <input type="text" name="nom_cliente" value="<?php echo $nombre_cliente;?>" requerid>
            <input type="text" name="apellido" value="<?php echo $apellido;?>" requerid>
            <input type="number"  name="ci_nit" value="<?php echo $ci_nit;?>" requerid>
            <input type="number"  name="celular_cli" value="<?php echo $celular_cli;?>" requerid>
            <input type="text"  name="direccion_cli" value="<?php echo $direccion_cli;?>" requerid>
            <div class="sec-btn">
                <input type="submit" value="GUARDAR">
                <input type="button" onclick="history.back()" style="background-color: red;" value="CANCELAR">
            </div>
        </form>  
    </div>

</div>
</div>
