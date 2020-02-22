
<?php 
	foreach($personas as $persona){

		$id_persona=$persona->id_persona;
		$nombre=$persona->nombre;
		$apellido=$persona->apellido;
		$edad=$persona->edad;
	
	}
?>
<div class="container">
  <script type="text/javascript" src="http://localhost/pruebaobjeto/scripts/persona.js"></script>
  <div class="row">
    <div class="col-12 col-md-6">
      <div class="panel_formulario">
        <h1>Editar persona</h1>
        <form>
          <input type="hidden" id="id_persona" name="id_persona" value="<?php echo $id_persona;?>">
          <div class="input-group ">
            <span class="input-group-addon" id="sizing-addon1">Nombre</span>
            <input type="text"  class="form-control" placeholder="Nombre" id="nombre" name="nombre" value="<?php echo $nombre;?>">
          </div>
          <div class="input-group ">
            <span class="input-group-addon" id="sizing-addon1">Apellido</span>
            <input type="text"  class="form-control" placeholder="Apellido" id="apellido" name="apellido" value="<?php echo $apellido;?>">
          </div>
          <div class="input-group ">
            <span class="input-group-addon" id="sizing-addon1">Edad</span>
            <input type="number"  class="form-control" placeholder="" id="edad" name="edad" value="<?php echo $edad;?>">
          </div>
          <hr>
          <div id="editar-persona">

          </div>
          <!-- <center>
					<input type="button" value="Actualizar" class="btn btn-success" class="center" onclick="editarPersona(<?php echo $id_persona;?>)">
					</center> -->
        </form>
      </div>
    </div>
  </div>
</div>

