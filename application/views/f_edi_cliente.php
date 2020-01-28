<?php
$id_cliente=$cliente[0]->id_cliente;
$nombre_cliente=$cliente[0]->nombre;
$apellido=$cliente[0]->apellido;
$ci_nit=$cliente[0]->ci_nit;
$celular_cli=$cliente[0]->celular_cli;
$direccion_cli=$cliente[0]->direccion_cli;

?>
   <div class="vista-dere">
    <div class="form">
        <form action="http://localhost/mitienda/index.php/Ccliente/g_edi_cliente/<?php echo $id_cliente;?>" method="post">
            <h1>EDITAR CLIENTE</h1>
            <p>(*)DEBE LLENAR TODOS LOS CAMPOS</p>
            <input type="text" name="nom_cliente" value="<?php echo $nombre_cliente;?>">
            <input type="text" name="apellido" value="<?php echo $apellido;?>">
            <input type="number"  name="ci_nit" value="<?php echo $ci_nit;?>">
            <input type="number"  name="celular_cli" value="<?php echo $celular_cli;?>">
            <input type="text"  name="direccion_cli" value="<?php echo $direccion_cli;?>">
            <input type="submit" value="GUARDAR">
        </form>  
    </div>

</div>
</div>
