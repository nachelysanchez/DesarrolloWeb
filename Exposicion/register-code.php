<?php
    require_once "conexion.php";

    $username = $namecomplet = $password = "";

    $username_error = $namecomplet_error = $password_error = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty(trim($_POST["username"]))){
            $username_error = "Por favor. Ingrese el nombre de usuario";
        }
        else{
            $sql = "SELECT IdUser FROM Users WHERE username = ?";

            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                $param_username = trim($_POST["username"]);

                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);

                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $username_error = "Este nombre de usuario ya está en uso.";
                    }
                    else{
                        $username = trim($_POST["username"]);
                    }
                }
                else{
                    echo "Algo salió mal. Inténtalo más tarde";
                }
            }
        }
        if(empty(trim($_POST["namecomplet"]))){
            $namecomplet_error = "Por favor. Ingrese el nombre completo";
        }
        else{
            $namecomplet = trim($_POST["namecomplet"]);
        }

        if(empty(trim($_POST["password"]))){
            $password_error = "Por favor. Ingrese la contraseña";
        }
        else{
            $password = trim($_POST["password"]);
        }

        if(empty($username_error) && empty($namecomplet_error) && empty($password_error)){
            $sql = "INSERT INTO Users(Name, Username, Password) VALUES (?,?,?)";

            if ($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "sss", $param_namecomplet,$param_username, $param_password);

                $param_namecomplet = $namecomplet;
                $param_password = $password;
                $param_username = $username;

                if(mysqli_stmt_execute($stmt)){
                    header("location: login.php");
                }
                else{
                    echo "Algo salió mal";
                }
            }
        }

        mysqli_close($link);
    }
?>