<?php
    include '../models/conexion.php'; 
    if(!empty($_GET["id"])){
        $id_user = $_GET["id"];
        echo $id_user;
       $sql=$conexion->query("UPDATE `users` SET `estado`= 1 WHERE id='$id_user'");
       echo "<div class='alert alert-success' role='alert'>
        Usuario Aprobado
        </div>";
       header("location: ../inicio.php");
    }
?>