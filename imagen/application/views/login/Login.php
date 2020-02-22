
  <div class="container">
	<script type="text/javascript" src="http://localhost/pruebaobjeto/scripts/persona.js"></script>
    <div class="login">
      <div class="login-title">
        <p>AUTENTICACION DE USUARIO</p>
      </div>
      <form id="login" action="<?= base_url('login/validar')?>" class="form-horizontal" method="POST">
        <div class="form-group">
          <div class="col-md-12">
            <label for="email" class="control-label">Email:</label>
						<input id="email" name="email" type="email" class="form-control" placeholder="Ingrese su email" onkeyup="pruebaemail(email.value);">
						<div id="emailOk" style="display:block;color:red;"></div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="password" class="control-label">Contraseña:</label>
            <input id="password" name="password" type="password" class="form-control" placeholder="Ingrese Contraseña" >
          </div>
				</div>
				<p><?php if(isset($mensaje)){
									echo $mensaje;
									}
						?></p>
        <div class="form-group mart">
          <div class="col-md-12">
            <input type="submit" class="btn btn-success" value="Acceder" >
          </div>
          <div class="col-md-12">
           <a href="http://localhost/pruebaobjeto/usuario" class="btn btn-info">Registrarse</a>
          </div>
        </div>
      </form>
    </div>
	</div>
	
</body>

</html>
