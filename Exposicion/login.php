<?php
    require "login-code.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login - Unidad 8</title>
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    </head>
    <body>
        <div class="container-all">
            <div class="container-form">
                <h1 class="title">Iniciar Sesión</h1>

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method = "post">
                    <label for="">Nombre de usuario</label>
                    <input type="text" name="username"/>
                    <span class="msg-error"><?php echo $username_error ?></span>
                    <label>Contraseña</label>
                    <input type="password" name= "password"/>
                    <span class="msg-error"><?php echo $password_error ?></span>
                    <input type="submit" value="iniciar">
                </form>

                <span class="text-footer">¿Aún no te has registrado? 
                    <a href="register.php">Registrate</a>
                </span>
            </div>
            <div class="container-text">
                <div class="capa">

                </div>
                <h1 class="title-descripcion">
                    Inicia sesión y explora todas las novedades.
                </h1>
                <p class="text-descripcion">
                    xxxx xxxxx xxxx xxx xxxxx xxxxx xxxx xxxxx xxxxx xxxx,
                    xxxxxx, xxxxx xxxxx xxxxx xxxx xxxxx xxxxxxx xxxxx x xxxx.
                </p>
            </div>
        </div>
    </body>
</html>