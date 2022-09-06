<?php
include("./models/conexion.php");
session_start();
    if (!empty($_POST["btnregister"])) {
        if (!empty($_POST["pass"]) && !empty($_POST["correo"]) && !empty($_POST["nombre"])) {
            $correo = $_POST["correo"];
            $pass = $_POST["pass"];
            $nombre = $_POST["nombre"];
            $sql=$conexion->query("INSERT INTO `users`(`nombre`, `email`, `pass`, `estado`) VALUES ('$nombre','$correo','$pass',0)");
           header("location: index.php");
        }else{
            echo "<div class='alert alert-danger'>Debe llenar todos los campos</div>";
        }
    }
?>