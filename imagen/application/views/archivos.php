<div class="container">
  <style>
  img {
    width: 150px;
    height: 150px;
    margin-top: 25px;
  }
  </style>
  <script type="text/javascript" src="http://localhost/pruebaobjeto/scripts/persona.js"></script>
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
        <!-- <div class="alert alert-danger" id="msg-error" style="text-align:left;"> -->
          <!-- <strong>¡Importante!</strong> Corregir los siguientes errores. -->
          <div class="list-errors"></div>
        </div>
        <form id="form-create-persona" class="form-horizontal" role="form"
          action="<?php base_url();?>persona/agregarConFoto" method="POST">
          <div class="form-group">
            <label for="formGroupExampleInput">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="* Escriba su Nombre" name="nombre"
              onkeyup="validar(this.value,5, 'nombre')" onkeypress="return soloLetras(event) " required>
            <div id="respuesta_nombre" style="display:block;color:red;"></div>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Apellido</label>
            <input type="text" class="form-control" id="apellido" placeholder="* Escriba su Apellido" name="apellido"
              onkeypress="return soloLetras(event) " onkeyup="validar(this.value,5, 'apellido')" required>
            <div id="respuesta_apellido" style="display:block;color:red;"></div>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Edad</label>
            <input type="number" class="form-control" id="edad" placeholder="* Escriba su Edad" name="edad" min="0"
              onkeypress="return soloNumeros(event) " max="3" required>
            <div id="respuesta_edad" style="display:block;color:red;"></div>
          </div>
          <form method='POST' id='formulario' enctype='multipart/form-data'>
            <input type='hidden' class='form-control' id='img_persona'>
            <div class="form-group">
              <input id="file" type="file" name="archivo" onchange="subir(event)">
              <hr>
              <div id="preview"></div>
              <!-- <img id="blah" src="https://via.placeholder.com/150" alt="Tu imagen" /> -->
            </div>
          </form>
          <div class="align-content-center">
            <div id=" listafoto">

            </div>
            <center>
              <input class="btn btn-success " class="registrar" type="button" value="Registrar" onclick="fotos(event)">
            </center>
          </div>
        </form>
      </div>
    </div>
    <div class="col12 col-md-6">
      <div class="panel1" id="listarchivos"></div>
    </div>
  </div>

</div>
