<?php
include("./models/conexion.php");
$id_user = $_SESSION["id"];
    if (!empty($_POST["btnregisternoticia"])) {
        if (!empty($_POST["titulo"]) && !empty($_POST["medio"]) && !empty($_POST["fecha"]) && !empty($_FILES["archivo"]["name"])) {
            $titulo = $_POST["titulo"];
            $medio = $_POST["medio"];
            $fecha = $_POST["fecha"];
            $n_archivo = $_FILES["archivo"]["name"];
            $archivo = $_FILES["archivo"]["tmp_name"];
            $ruta = "./img/" . $n_archivo;
            $ruta_BD = "img/". $n_archivo;
           move_uploaded_file($archivo,$ruta);
            $sql=$conexion->query("INSERT INTO `noticias`(`id_user`, `titulo`, `medio`, `fecha`, `archivo`) VALUES ('$id_user','$titulo','$medio','$fecha','$ruta_BD')");
            if ($sql) {
                header("location: inicio.php");
            }else{
                echo "<script> alert('No se pudo guardar la informacion') </script>";
            }
        }else{
            echo "<div class='alert alert-danger'>Debe llenar todos los campos</div>";
        }
    }
?>