<?php
$user_session=$this->session->userdata('email_usuario');
if($user_session!=""){
    header('Location:http://localhost/mitienda/index.php/Cmitienda/perfil');

}else{

}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sistema C&V</title>
        <link rel="stylesheet" href="http://localhost/mitienda/assets/style_login.css">
        <script src="http://localhost/mitienda/assets/js/jquery.js"></script>
        <script type="text/javascript" src="http://localhost/mitienda/assets/js/script.js" ></script>
    </head>
    <body>
        <nav id="menu-login">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">Sistema C&V</label>
            <ul>
                <li><a class="activo" href="#">Login</a></li>
                <li><a href="http://localhost/mitienda/index.php/Cmitienda/form_registro_usuario">Registrarse</a></li>
            </ul>
        </nav>
        <br>
        <div class="form">
            <form>
                <h3>(*)DEBE LLENAR TODOS LOS CAMPOS</h3>
                <input type="email" placeholder="Escriba su correo" id="correo" required>
                <input type="password" placeholder="Escriba su contraseña" id="clave" required>
                <h3>MOSTRAR CONTRASEÑA</h3>
                <p style="color: red;"><?php
                    if(isset($mensaje)){
                        echo $mensaje;
                    }
                    ?></p>
                <input type="button" value="INGRESAR" onclick="ingresar();">
            </form>
        </div>

    </body>
</html>