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
                <li><a href="http://localhost/mitienda">Login</a></li>
                <li><a class="activo" href="#">Registrarse</a></li>
            </ul>
        </nav>
		<br>
		<form action="http://localhost/mitienda/index.php/Cmitienda/registrar_usuario" method="post">
			<h2>(*)DEBE LLENAR TODOS LOS CAMPOS</h2>
			<input type="text" placeholder="Correo electronico" name="correo">
			<input type="password" placeholder="Contraseña" name="clave">
			<input type="text" placeholder="Nombres" name="nombre">
			<input type="text" placeholder="Apellidos" name="apellido">
			<input type="text" placeholder="Alias" name="alias">
			<h2>MOSTRAR CONTRASEÑA</h2>
			<input type="submit" value="REGISTRAR">
		</form>

    </body>
</html>