<?php
$id_producto=$producto[0]->id_producto;
$nombre_producto=$producto[0]->nombre_producto;
$cantidad=$producto[0]->cantidad;
$detalle=$producto[0]->detalle;
$precio_compra=$producto[0]->precio_compra;
$precio_venta=$producto[0]->precio_venta;

?>

<form>
    <h2>EDICION DE PRODUCTO</h2>
    <p>(*)DEBE LLENAR TODOS LOS CAMPOS</p>
    <div class="row">
        <div class="form-group col-md-6">
            <input class="form-control" type="text" placeholder="Nombre producto" id="nom_producto" value="<?php echo $nombre_producto;?>">
        </div>
        <div class="form-group col-md-6">
            <input class="form-control" type="number" placeholder="Cantidad" id="cantidad" value="<?php echo $cantidad;?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <input class="form-control" type="number" placeholder="Precio Compra" id="pre_compra" step=".01" value="<?php echo $precio_compra;?>">
        </div>
        <div class="form-group col-md-6">
            <input class="form-control" type="number" placeholder="Precio Venta" id="pre_venta" step=".01" value="<?php echo $precio_venta;?>">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6">
            <textarea class="form-control" placeholder="Detalle" id="detalle" cols="30" rows="5"><?php echo $detalle;?></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
                <div id="respuesta_form">

                </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <input class="btn btn-primary" type="button" value="GUARDAR" onclick="GProducto(<?php echo $id_producto;?>);">
            <input class="btn btn-danger" type="button" onclick="history.back()" style="background-color: red;" value="CANCELAR">
        </div>
        <div class="col-md-4"></div>
    </div>


</form>


</div>
