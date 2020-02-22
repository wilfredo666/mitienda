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

   if ($email_session=="") { }
   else{
    header("http://localhost/pruebaobjeto/persona/");
   }

  ?> 

</head>
<style type="text/css">
body {
  background-color: #0B4C5F;

}

.contenido {
  padding: 10px;
}

.login {
  border: 1px solid #FF8000;

  width: 400px;
  color: white;
  font-weight: bolder;
  top: 50%;
  left: 50%;
  position: absolute;
  margin-top: -200px;
  margin-left: -200px;
}
.login .mart{
	display: flex;
}
.login-title {
  padding: 10px;
  text-align: center;
  background-color: #FF8000;
}

form {
  padding: 10px 20px;
  background: #A4A4A4;
}
</style>

<body>
