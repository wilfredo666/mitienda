
<form>
    <h2>REGISTRO DE PRODUCTO</h2>
    <p>(*)DEBE LLENAR TODOS LOS CAMPOS</p>
    <div class="row">
        <div class="form-group col-md-6">
            <input class="form-control" type="text" placeholder="Nombre producto" id="nom_producto">
        </div>
        <div class="form-group col-md-6">
            <input class="form-control" type="number" placeholder="Cantidad" id="cantidad">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <input class="form-control" type="number" placeholder="Precio Compra" id="pre_compra" step=".01">
        </div>
        <div class="form-group col-md-6">
            <input class="form-control" type="number" placeholder="Precio Venta" id="pre_venta" step=".01">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6">
            <textarea class="form-control" placeholder="Detalle" id="detalle" cols="30" rows="5"></textarea>
        </div>
        
        <form method='post' id='formulario' enctype='multipart/form-data'>
           <input type='hidden' class='form-control' id='img_inmueble'>
            <div class="form-group col-md-6">
                <label for="">Imagen de portada</label>
                <input class="form-control" type="file" name="portada_p" onchange="cargar(event);">
                <div id="preview"></div>
            </div>
        </form>

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
            <input class="btn btn-primary" type="button" value="REGISTRAR" onclick="regProducto();">
            <input class="btn btn-danger" type="button" onclick="history.back()" style="background-color: red;" value="CANCELAR">
        </div>
        <div class="col-md-4"></div>
    </div>


</form>


</div>
