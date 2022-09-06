<?php
    session_start();
    if (!empty($_POST["btnlogin"])) {
        if (!empty($_POST["pass"]) && !empty($_POST["correo"])) {
            $correo = $_POST["correo"];
            $pass = $_POST["pass"];
            $sql=$conexion->query("select * from users where email = '$correo' and pass='$pass'");
            if ($datos=$sql->fetch_object()) {
                if ($datos->estado == 1) {
                    $_SESSION["id"]=$datos->id;
                    $_SESSION["nombre"]=$datos->nombre;
                    $_SESSION["username"]=$datos->username;
                    header("location: inicio.php");
                }else{
                    echo "<div class='alert alert-danger'>Acceso denegado NO esta aprobado Aún</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>Usuario o contraseña esta errado</div>";
            }
        } else {
            print ("Campos vacios");
        }
    }
?>