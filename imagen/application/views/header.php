<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="http://localhost/pruebaobjeto/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/pruebaobjeto/assets/css/bootstrap-theme.min.css">
  <!-- Optional theme -->


  <script src="http://localhost/pruebaobjeto/assets/js/jquery-3.4.1.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
	<script src="http://localhost/pruebaobjeto/assets/js/bootstrap.min.js"></script>
	
	<title>Personas Objeto</title>
	
	<?php

   $email_session = $this->session->userdata('email');
   if ($email_session!="") { }
   else{
		header("Location:http://localhost/pruebaobjeto/login");
   }

  ?>  
</head>

<body>
  <div class="row">
	<script type="text/javascript" src="http://localhost/pruebaobjeto/scripts/persona.js"></script>
    <div class="col-lg-12 col-md-12 cpl-xs-12">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class=""><a href="http://localhost/pruebaobjeto/">Registrar <span class="sr-only">(current)</span></a>
              </li>
							<li><a href="http://localhost/pruebaobjeto/persona/lista">lista personas</a></li>
							<li><a href="http://localhost/pruebaobjeto/persona/archivo">subir archivos</a></li>
							<li><a href="http://localhost/pruebaobjeto/imagenes">galeria</a></li>
            </ul>
            <form class="navbar-form navbar-left" method="get" action="">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" name="nombre" onkeyup="buscar();">
              </div>
              <button type="submit" class="btn btn-default" onclick="buscar()">Buscar</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-user fa-fw"></i> <?= $this->session->userdata('nombre')?><b class="caret"></b>
                </a>
                
                  <li><a href="#"><i class="fa fa-user fa-fw"></i>Perfil</a></li>
                  <li><a href="http://localhost/pruebaobjeto/login/salir" id="cerrar"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesion</a>
                  </li>
                
              </li>
            </ul>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </div>
    <div class="row">
      <div class="modal fade" id="usuarioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Registro Usuario</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="">
              <div class="modal-body" id="Usuario"></div>

              <div class="modal-body" id="panel_usuario"></div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" onclick="registro()">Registrar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
