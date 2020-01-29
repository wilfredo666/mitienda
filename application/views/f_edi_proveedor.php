<?php
$id_proveedor=$proveedor[0]->id_proveedor;
$empresa=$proveedor[0]->empresa;
$encargado=$proveedor[0]->encargado;
$celular_prov=$proveedor[0]->celular_prov;
$direccion_prov=$proveedor[0]->direccion_prov;

?>
   <div class="vista-dere">
    <div class="form-reg">
        <form action="http://localhost/mitienda/index.php/Cproveedor/g_edi_proveedor/<?php echo $id_proveedor;?>" method="post">
            <h2>EDITAR PROVEEDOR</h2>
            <p>(*)DEBE LLENAR TODOS LOS CAMPOS</p>
            <input type="text" name="nom_proveedor" value="<?php echo $empresa;?>" required>
            <input type="text" name="encargado" value="<?php echo $encargado;?>" required>
            <input type="number"  name="celular" value="<?php echo $celular_prov;?>" required>
            <input type="text"  name="direccion" value="<?php echo $direccion_prov;?>" required>
            <div class="sec-btn">
                <input type="submit" value="GUARDAR">
                <input type="button" onclick="history.back()" style="background-color: red;" value="CANCELAR">
            </div>
        </form>  
    </div>

</div>
</div>
