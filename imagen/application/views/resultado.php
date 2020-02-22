
  <div class="row">
	<script type="text/javascript" src="http://localhost/pruebaobjeto/scripts/persona.js"></script>
    <div class="col-md-12">
        <div class="panel-body" id="per">

          <p>
            <strong>Mostrar por : </strong>
            <select name="cantidad" id="cantidad">
              <option value="5">5</option>
              <option value="10">10</option>
            </select>
          </p>
          <table id="tbclientes" class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th colspan="2"></th>
              </tr>
            </thead>
            <tbody>
              <?php
						//print_r($clientes);

						foreach ($personas as $persona) {

							$id_persona = $persona->id_persona;
							$nombre = $persona->nombre;
							$apellido = $persona->apellido;
							$edad = $persona->edad;
						?>
              <tr>
                <td><?php echo $id_persona; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $apellido; ?></td>
								<td><?php echo $edad; ?></td>
								<!-- boton sin modal -->
                <!-- <td align="center"><a href="http://localhost/pruebaobjeto/persona/editar/<?php echo $id_persona ?>"
										class="btn btn-success btn-md">Editar</a></td> -->
										<!-- boton con modal -->
										<td align="center"><input type="button" class="btn btn-success" value="Editar " onclick="editar(<?php echo $id_persona ?>)"></td>
                <!-- <div id="eliminar-persona">

								</div> -->
								<!-- boton sin modal -->
                <!-- <td align="center"><input class="btn btn-danger btn-md" type="button" value="Eliminar"
										onclick="eliminarPersona(<?php echo $id_persona ?>)"></td> -->

									<!-- boton para modal -->
                <td align="center"><input class="btn btn-danger btn-md" type="button" value="Eliminar Modal"
                    onclick="Vmodal()"></td>
              </tr>
              <?php
						}
						?>
            </tbody>
          </table>
          <div class="text-center paginacion" id="list_personas">

          </div>
        </div>
      
    </div>
  </div>


<!-- Modal eliminar -->
<div class="modal" tabindex="-1" role="dialog" id="eliminarModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">ELIMINAR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
          <p style="color: red">ESTAS SEGURO DE ELIMINAR ?????</p>
        </div>
        <input type="button" class="btn btn-danger" onclick="eliminarPersonaM(<?php echo $id_persona ?>)"
          value="Eliminar">
        <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
        <div id="eliminar_per">

        </div>
      </div>
    </div>
  </div>
</div>

<!-- modal editar -->

<div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORMULARIO EDITAR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="panel_editar"></div>
        <div id="panel_editar_personas"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success"
          onclick="editarPersonaM()">Actualizar</button>
      </div>
    </div>
  </div>
</div>


<!-- <div class="row">
<script type="text/javascript" src="http://localhost/pruebaobjeto/scripts/persona.js"></script>
  <div class="col-xl-7">
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>id</th>
          <th>nombre</th>
          <th>Apellido</th>
          <th>edad</th>
        </tr>
      </thead>
      <tbody>
        <?php
						//print_r($clientes);

						foreach ($personas as $persona) {

							$id_persona = $persona->id_persona;
							$nombre = $persona->nombre;
							$apellido = $persona->apellido;
							$edad = $persona->edad;
						?>
        <tr>
          <td><?php echo $id_persona; ?></td>
          <td><?php echo $nombre; ?></td>
          <td><?php echo $apellido; ?></td>
          <td><?php echo $edad; ?></td>
          <td><a href="http://localhost/pruebaobjeto/persona/editar/<?php echo $id_persona ?>"
							class="btn btn-success btn-md">Editar</a></td>
							<div id="eliminar-persona">

							</div>
							<td><input class="btn btn-danger btn-md" type="button" value="Eliminar" onclick="eliminarPersona(<?php echo $id_persona ?>)"></td>
        </tr>
        <?php
						}
						?>
      </tbody>
    </table>
	</div>
	<div class="col-xl-5"></div>
</div> -->


