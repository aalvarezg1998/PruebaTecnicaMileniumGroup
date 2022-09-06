<?php
    include("./models/conexion.php");
    $sql=$conexion->query("select * from users where estado = 0");
?>