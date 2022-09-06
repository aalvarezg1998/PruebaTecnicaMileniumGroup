<?php
    include './models/conexion.php'; 
    session_start();
    if (empty($_SESSION["id"])) {
    header("location: index.php");
    }
    $id_noticia = $_GET["id"];
    $sql2=$conexion->query("select * from noticias where id_noticia = '$id_noticia'");
    $datos=$sql2->fetch_object();
    
   // header("location: ../noticia.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/stylesRegister.css">
    <title>Home</title>
    
</head>
<body>
<nav class="navbar navbar-dark bg-dark">  
  <div class="container">
      <div class="col-md-9">
      <div class="col-md-3">
        <a href="./inicio.php">
          <img 
            src="https://milenium.group/wp-content/uploads/2022/04/acelerate_mobil.png" 
            class="img-fluid" 
            alt="imaben MileniumGroup">
        </a>
      </div>
      </div>
      <div class="col-md-1 text-center">
        <a class="navbar-brand" href="controllers/logoutController.php"> Salir </a>
      </div>
      <div class="col-md-2 text-center">
        <h6 class="color-h3">User: <?php echo $_SESSION["nombre"];?></h6>
      </div>
  </div>
</nav>
<div class="container">
<h3 class="text-center mt-4">NOTICIAS</h3>
<hr>
</div>
<div class="container"> 
  <div class="row vh-10 justify-content-center align-items-center">
  <div class="card " style="width: 30rem;">
    <img src="<?php echo $datos->archivo;?>" class="card-img-top mt-2" alt="atraco en valledupar">
    <div class="card-body">
      <h3 class="card-title"><?php echo $datos->titulo;?></h3>
      <p class="card-text">
      <h6 >Medio: <?php echo $datos->medio;?></h6>
      <h6  >Fecha de publucacion: <strong style="color: #797676;"><?php echo $datos->fecha;?></strong> </h6>
      </p>
      <a href="./inicio.php" class="btn btn-primary">volver a inicio</a>
    </div>
  </div>
  
  
  
  </div>
</div>


    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>