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
                <li><a class="activo" href="#">Login</a></li>
                <li><a href="http://localhost/mitienda/index.php/Cmitienda/form_registro_usuario">Registrarse</a></li>
            </ul>
        </nav>
		<br>
		<div class="form">
		    <form action="http://localhost/mitienda/index.php/Cmitienda/ingresar" method="post">
			<h2>(*)DEBE LLENAR TODOS LOS CAMPOS</h2>
			<input type="email" placeholder="Escriba su correo" name="correo">
			<input type="password" placeholder="Escriba su contraseña" name="clave">
			<h2>MOSTRAR CONTRASEÑA</h2>
			<input type="submit" value="INGRESAR">
		</form>
		</div>

    </body>
</html>