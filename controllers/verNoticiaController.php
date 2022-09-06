<?php
    include '../models/conexion.php'; 
    $id_noticia = $_GET["id"];
    $sql2=$conexion->query("select * from noticias where id_noticia = '$id_noticia'");
    $datos=$sql2->fetch_object();
    echo $datos->titulo;
    header("location: ../noticia.php");
?>