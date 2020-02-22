<div class="container">
  <script type="text/javascript" src="http://localhost/pruebaobjeto/scripts/persona.js"></script>
  <style>
  /*
Full screen Modal 
*/
  .fullscreen-modal .modal-dialog {
    margin: 0;
    margin-right: auto;
    margin-left: auto;
    width: 100%;
  }

  @media (min-width: 768px) {
    .fullscreen-modal .modal-dialog {
      width: 750px;
    }
  }

  @media (min-width: 992px) {
    .fullscreen-modal .modal-dialog {
      width: 970px;
    }
  }

  @media (min-width: 1200px) {
    .fullscreen-modal .modal-dialog {
      width: 1170px;
    }
  }
  </style>
  <div class="row">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registro Personas</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- <form>
              <div class="form-group">
                <label for="formGroupExampleInput">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="* Escriba su Nombre" name="nombre"
                  onkeyup="validar(this.value,5, 'nombre')" onkeypress="return soloLetras(event) " required>
                <div id="respuesta_nombre" style="display:block;color:red;"></div>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Apellido</label>
                <input type="text" class="form-control" id="apellido" placeholder="* Escriba su Apellido"
                  name="apellido" onkeypress="return soloLetras(event) " onkeyup="validar(this.value,5, 'apellido')"
                  required>
                <div id="respuesta_apellido" style="display:block;color:red;"></div>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Edad</label>
                <input type="number" class="form-control" id="edad" placeholder="* Escriba su Edad" name="edad" min="0"
                  onkeypress="return soloNumeros(event) " max="3" required>
                <div id="respuesta_edad" style="display:block;color:red;"></div>
              </div>
              <div class="align-content-center">
                <div id=" lista">

                </div>
                <!-- <center>
                  <input class="btn btn-success " class="registrar" type="button" onclick="registro()"
                    value="Registrar">
                </center> 
              </div>
						</form> -->
            <div id="panel_personas"></div>
            <div id="panel_registro_personas"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success" onclick="modalRegistro()">Guardar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <!-- <a href="#" class="btn btn-success">Agregar personas</a> -->
      <button type="button" class="btn btn-success" onclick="modal()">
        Agregar Personas
      </button>
      <input type="button" class="btn btn-primary" onclick="modalt()" value="Agregar Personasss">
      <input type="button" class="btn btn-info" onclick="Vusuario()" value="vista Usuario">
      <input type="button" class="btn btn-info" onclick="agregarCarrito()" value="Agregar al Carrito">
    </div>
    <div class="col-md-4 col-md-offset-2">
      <div class="form-group has-feedback has-feedback-left">

        <input type="text" class="form-control" name="busqueda" id="buscaper" placeholder="Buscar algo"
          onkeyup="buscar()" />
        <i class="glyphicon glyphicon-search form-control-feedback"></i>
        <div id="buscar">

        </div>
      </div>

    </div>

  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h4>Lista de Personas</h4>
        </div>
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
								<th>foto</th>
                <th colspan="2"></th>
              </tr>
            </thead>
            <tbody>
              <?php
						//print_r($clientes);

						foreach ($personas->result() as $persona) {

							$id_persona = $persona->id_persona;
							$nombre = $persona->nombre;
							$apellido = $persona->apellido;
							$edad = $persona->edad;
							$foto = $persona->foto;
						?>
              <tr>
                <td><?php echo $id_persona; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $apellido; ?></td>
								<td><?php echo $edad; ?></td>
								<td><img src="http://localhost/pruebaobjeto/fotos/<?php echo $foto; ?>" alt="" style="width: 100px; height: 100px"></td>
                <!-- boton sin modal -->
                <!-- <td align="center"><a href="http://localhost/pruebaobjeto/persona/editar/<?php echo $id_persona ?>"
										class="btn btn-success btn-md">Editar</a></td> -->
                <!-- boton con modal -->
                <td align="center"><input type="button" class="btn btn-success" value="Editar "
                    onclick="editar(<?php echo $id_persona ?>)"></td>
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
          <div class="text-center paginacion" " >
							<?php echo $pagination?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal eliminar -->
<div class=" modal" tabindex="-1" role="dialog" id="eliminarModal">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">ELIMINAR</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <?php
										foreach ($listaper as $per) {
										$id_pers = $per->id_persona;
										$nombre = $per->nombre;
										$apellido = $per->apellido;
										$edad = $per->edad;
										}
										?>
                  <div>
                    <p style="color: red">ESTAS SEGURO DE ELIMINAR ?????</p>
                  </div>
                  <input type="button" class="btn btn-danger" onclick="eliminarPersonaM(<?php echo $id_pers ?>)"
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
                  <button type="button" class="btn btn-success" onclick="editarPersonaM()">Actualizar</button>
                </div>
              </div>
            </div>
          </div>

          <!-- modal Agregar carrito -->
          <!-- Modal -->
          <div class="modal fullscreen-modal fade" id="carritoModal" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel" data-toggle="modal" data-target=".bd-example-modal-xl">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                      aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Registro ventas</h4>
                </div>
                <div class="modal-body">
                  <div id="panel_carrito"></div>

                </div>
                <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
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
