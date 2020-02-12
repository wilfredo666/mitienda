<?php
$user_session=$this->session->userdata('email_usuario');
if($user_session!=""){

}else{
    header('Location:http://localhost/mitienda');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sistema C&V</title>
        <link rel="stylesheet" href="http://localhost/mitienda/assets/style_login.css">
    </head>
    <body>
        <nav id="menu-login">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">Sistema C&V</label>
            <ul>
                <li><a href="http://localhost/mitienda/index.php/Cmitienda/perfil">Perfil</a></li>
                <li><a href="http://localhost/mitienda/index.php/Cmitienda/salir">Salir</a></li>
            </ul>
        </nav>
        <br>