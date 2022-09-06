<?php
    include '../models/conexion.php'; 
    if(!empty($_GET["id"])){
        $id_user = $_GET["id"];
        echo $id_user;
       $sql=$conexion->query("UPDATE `users` SET `estado`= 2 WHERE id='$id_user'");
       
       header("location: ../inicio.php");
    }else{
        echo "<div class='alert alert-success' role='alert'>
        Usuario Aprobado
        </div>";
    }
?>