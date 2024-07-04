<?php
    define('DB_SERVER', 'localhost');
    define('DB_Username', 'root');
    define('DB_password', '');
    define('DB', 'expodb');

    $link = mysqli_connect(DB_SERVER, DB_Username, DB_password, DB);

    if($link === false){
        die("Error en la conexión" . mysqli_connect_error());
    }
    
?>