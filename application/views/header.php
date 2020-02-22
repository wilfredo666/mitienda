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
        <script src="http://localhost/mitienda/assets/js/jquery.js"></script>
        <script type="text/javascript" src="http://localhost/mitienda/assets/js/bootstrap.js" ></script>
        <link rel="stylesheet" type="text/css" href="http://localhost/mitienda/assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/mitienda/assets/css/bootstrap-theme.css">
        <script type="text/javascript" src="http://localhost/mitienda/assets/js/script.js" ></script>
        <style type="text/css">
            Full screen Modal 
            .fullscreen-modal .modal-dialog {
                margin: 0;
                margin-right: auto;
                margin-left: auto;
                width: 100%;
            }
            @media (min-width: 768px) {
                .fullscreen-modal .modal-dialog {
                    width: 750px;
                }
            }
            @media (min-width: 992px) {
                .fullscreen-modal .modal-dialog {
                    width: 970px;
                }
            }
            @media (min-width: 1200px) {
                .fullscreen-modal .modal-dialog {
                    width: 1170px;
                }
            }
        </style>
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