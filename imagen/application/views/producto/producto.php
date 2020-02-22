<div class="container">
<script type="text/javascript" src="http://localhost/pruebaobjeto/scripts/persona.js"></script>
<script src="http://localhost/pruebaobjeto/assets/js/jquery-3.4.1.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
	<script src="http://localhost/pruebaobjeto/assets/js/bootstrap.min.js"></script>
  <div class="row">
    <div class="col-12 col-md-6">

      <div class="formulario">
        <!-- <div class="group-bus">
          <input type="text" class="buscar" id="buscarrr" onkeyup="filtrar();">
          <!-- <input type="button" class="ntb-buscar" value="Buscar" id="botonn"> --
					<input type="button" class="btn btn-danger" value="modal" id="modal" onclick="Vusuario()">
          <ul id="resultado">

          </ul>
				</div> -->
				
        <form>
          <div class="form-group">
            <label for="formGroupExampleInput">Nombre</label>
						<input type="text" class="form-control" id="nombre" placeholder="* Escriba su Nombre" name="nombre" onkeyup="validar(this.value,5, 'nombre')" onkeypress="return soloLetras(event) " required>
						<div id="respuesta_nombre" style="display:block;color:red;"></div>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Detalle</label>
						<textarea class="form-control" id="detalle" name="detalle_p" placeholder=" * Describa su Producto"></textarea>
						<div id="respuesta_apellido" style="display:block;color:red;"></div>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Precio</label>
						<input type="number" class="form-control" id="precio" placeholder="* precio" name="precio" min="0" onkeypress="return soloNumeros(event) " max="3" required>
						<div id="respuesta_edad" style="display:block;color:red;"></div>
					</div>
          <div class="align-content-center">
						<div id=" lista">

						</div>
            <center>
              <input class="btn btn-success " class="registrar" type="button" onclick="registroCarrito()" value="Registrar" >
            </center>
          </div>
        </form>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="panel1" id="productos">

      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-md-6">
      <div class="edicion">
        <form>
          <h2>FORMULARIO DE EDICION</h2>
          <input type="hidden" id="id">
          <div class="form-group">
            <label for="formGroupExampleInput">Nombre</label>
						<input type="text" class="form-control" id="nombre_ed" placeholder="* Escriba su Nombre" name="nombre" >
						
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Apellido</label>
            <input type="text" class="form-control" id="apellido_ed" placeholder="* Escriba su Apellido"
              name="apellido">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Edad</label>
            <input type="number" class="form-control" id="edad_ed" placeholder="* Escriba su Edad" name="apellido"
              min="0">
          </div>
          <div class="align-content-center">
            <center>
              <input class=" btn-success" class="guardar" type="button" onclick="btn_guardar()" value="Guardar">
              <input class=" btn-danger" class="cancelar" type="button" onclick="cancelar()" value="Cancelar">
            </center>
          </div>
        </form>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="panel1" id="listar">

      </div>
    </div>
  </div>
</div>

