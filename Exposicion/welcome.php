<?php
    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Bienvenido - Unidad 8</title>
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    </head>
    <body>
        <div class="ctn-welcome">
            <img src="" alt="" class="logo-welcome">
            <h1 class="title-welcome">Bienvenido lo has <b>LOGRADO</b></h1>
            <a href="login.php" class="close-sesion">Cerrar Sesión</a>
        </div>
    </body>
</html>