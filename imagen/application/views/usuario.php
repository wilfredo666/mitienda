

<div class="container" style="background: none">
<script type="text/javascript" src="http://localhost/pruebaobjeto/scripts/persona.js"></script>
  <section class="contenido">
    <div class="row">     
      <div class="tab-content">
        <div class="tab-pane  active" id="tab1">
          <div class="col-lg-4"></div>
          <div class="col-lg-4 text-center">
            <h2>Registro de Usuario</h2>
            <div class="alert alert-danger" id="msg-error" style="text-align:left;">

              <strong>¡Importante!</strong> Corregir los siguientes errores.
              <ul class="list-errors"></ul>
            </div>
            <form id="form-create-usuario" style="padding:0px 15px;" class="form-horizontal" role="form"
              action="<?php base_url();?>usuario/guardar" method="POST">
              <div class="form-group">
								<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese su Nombres" onkeyup="validar(this.value,4 ,'nombre') " onkeypress=" return soloLetras(event)"/>
								<div id="respuesta_nombre" style="display:block;color:red;"></div>
              </div>
              <div class="form-group">
								<input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingrese sus Apellidos  " onkeyup="validar(this.value,4 ,'apellido') " onkeypress=" return soloLetras(event)"/>
								<div id="respuesta_apellido" style="display:block;color:red;"></div>
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese su Contraseña" />
              </div>
              <div class="form-group">
								<input type="email" name="email" id="email" class="form-control" placeholder="Ingrese su Email" onkeyup="pruebaemail(email.value);"/>
								<div id="emailOk" style="display:block;color:red;"></div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" value="Registrar">Registrar</button>
              </div>
            </form>
          </div>
        </div>

        <div class="tab-pane fade" id="tab2">

          <div class="row">
            <br>
            <div class="col-lg-7"></div>
            <div class="col-lg-3">
              <input type="text" class="form-control" id="buscar" placeholder="Buscar">
            </div>
            <div class="col-lg-2">
              <input type="button" class="btn btn-primary btn-block" id="btnbuscar" value="Mostrar Todo"
                data-toggle='modal' data-target='#basicModal'>
            </div>
          </div>
          <hr>
          <div class="row">
            <div id="listaEmpleados" class="col-lg-8">

            </div>
            <div class="col-lg-4">
              <div class="panel panel-default">
                <!-- <div class="panel-heading">Editar Empleado</div>
								  	<div class="panel-body">
								  		<form id="form-actualizar" class="form-horizontal" action="<?php echo base_url();?>empleados/actualizar" method="post" role="form" style="padding:0 10px;">
								  			<div class="form-group">
								  				<label>Nombres:</label>
								  				<input type="hidden" id="idsele" name="idsele" value="">
								  				<input type="text" name="nombressele" id="nombressele" class="form-control">
								  			</div>
								  			<div class="form-group">
								  				<label>Apellidos:</label>
								  				<input type="text" name="apellidossele" id="apellidossele" class="form-control">
								  			</div>
								  			<div class="form-group">
								  				<label>DNI:</label>
								  				<input type="text" name="dnisele" id="dnisele" class="form-control">
								  			</div>
								  			<div class="form-group">
								  				<label>Telefono:</label>
								  				<input type="text" name="telefonosele" id="telefonosele" class="form-control">
								  			</div>
								  			<div class="form-group">
								  				<label>Email:</label>
								  				<input type="email" name="emailsele" id="emailsele" class="form-control">
								  			</div>
								  			<div class="form-group">
								  				<button type="button" id="btnactualizar" class="btn btn-success btn-block">Guardar</button>

								  			</div>
								  		</form>
								    
								  	</div>
								</div> -->

              </div>

            </div>

          </div>

        </div>


      </div>

  </section>


</div>
