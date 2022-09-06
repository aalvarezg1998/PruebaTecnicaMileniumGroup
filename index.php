<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <title>INICIO</title>
</head>
<body >
<div class="container"> 
  <div class="row vh-100 justify-content-md-center align-items-center row justify-content-sm-center">
    <div class="col-md-4">
      <img src="https://milenium.group/wp-content/uploads/2022/04/acelerate_mobil.png" class="img-fluid" alt="imaben MileniumGroup">
      <h3 class="color text-center">INICIA SESIÓN</h3>
    <form method="post" action="">
        <?php
        include "models/conexion.php";
        include ("controllers/loginController.php");
        ?>
      <div class="mb-3 item-center">
        <input name="correo"  type="text" class="form-control" id="exampleInputEmail1" placeholder="Emial" >
      </div>
      <div class="mb-3">
        <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" >
      </div>
      <div class="mb-3 text-center">
      <input name="btnlogin" type="submit" class="btn btn-outline-light" value="INGRESAR" ></input>
      </div>
    </form>
    <h6 class="color text-center">¿Aún no tienes una cuenta? <b><a href="/pruebaTecnica/registerUser.php">Registrate</a></b></h6>
    </div>
   
  </div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>