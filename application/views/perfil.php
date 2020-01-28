<?php 
$nombre=$datos_usuario[0]->nom_usuario;
$apellido=$datos_usuario[0]->ape_usuario;
$alias=$datos_usuario[0]->alias_usuario;
$email=$datos_usuario[0]->email_usuario;
?>
<div class="vista-dere">
    <div id="perfil-usuario">
        <br>
        <img src="../../assets/img/wilfredo.jpg" alt="">
        <table>
            <tr>
                <td><h2>Nombre(s):</h2></td>
                <td><p><?php echo $nombre;?></p></td>
            </tr>
            <tr>
                <td><h2>Apellido(s):</h2></td>
                <td><p><?php echo $apellido;?></p></td>
            </tr>
            <tr>
                <td><h2>Email(s):</h2></td>
                <td><p><?php echo $email;?></p></td>
            </tr>
            <tr>
                <td><h2>Alias:</h2></td>
                <td><p><?php echo $alias;?></p></td>
            </tr>
        </table>
        <br>
    </div>

</div>
</div>
