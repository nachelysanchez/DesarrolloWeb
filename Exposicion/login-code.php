<?php
    session_start();

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: welcome.php");
        exit;
    }

    require_once "conexion.php";

    $username = $password = "";
    $username_error = $password_error = "";

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(empty(trim($_POST["username"]))){
            $username_error = "Por favor. Ingrese el nombre de usuario";
        }
        else{
            $username = trim($_POST["username"]);
        }

        if(empty(trim($_POST["password"]))){
            $password_error = "Por favor. Ingrese una contraseña";
        }
        else{
            $password = trim($_POST["password"]);
        }




        if(empty($password_error) && empty($username_error)){
            $sql = "SELECT IdUser, Name, username, password FROM Users WHERE Username = ?";

            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                $param_username = $username;

                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);

                    if(mysqli_stmt_num_rows($stmt) == 1){
                        mysqli_stmt_bind_result($stmt, $iduser, $name, $usernamedb, $passworddb);
                        if(mysqli_stmt_fetch($stmt)){
                            if($password === $passworddb){
                                session_start();

                                $_SESSION["loggedin"] = true;
                                $_SESSION["IdUser"] = $iduser;
                                $_SESSION["UserName"] = $usernamedb;
                                header("location: welcome.php");
                            }
                            else{
                                $password_error = "La contraseña es incorrecta.";
                            }
                        }
                        else{
                            $username_error = "No se ha encontrado ninguna cuenta con este usuario";
                        }
                    }
                }
                else{
                    echo "Algo salió mal. Inténtalo más tarde";
                }
            }
        }

        mysqli_close($link);
    }
?>