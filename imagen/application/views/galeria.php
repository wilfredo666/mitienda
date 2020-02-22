<div class="container">
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
