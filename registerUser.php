<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Document</title>
</head>
<body>
<div class="container"> 
  <div class="row vh-100 justify-content-center align-items-center">
    <div class="col-md-6">
      <img src="https://milenium.group/wp-content/uploads/2022/04/acelerate_mobil.png" class="img-fluid" alt="imaben MileniumGroup">
    </div>
    <div class="col-md-6 form-color ">
      <h3 class="text-center mt-4">REGISTRATE</h3>
      <?php
        include "controllers/registerUserController.php"
      ?>
      <form method="post" action="" class="mt-4 mx-4">
        <div class="mb-3 item-center">
          <input name="nombre"  type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombres" autocomplete="off" >
        </div>
        <div class="mb-3">
          <input name="correo" type="text" class="form-control" id="exampleInputPassword1" placeholder="Email" autocomplete="off" >
        </div>
        <div class="mb-3">
          <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña"  autocomplete="off">
        </div>
        <div class="mb-3 text-center">
        <input name="btnregister" type="submit" class="btn btn-outline-dark" value="REGISTRAR" ></input>
        </div>
      </form>
      <h6 class="text-center" >
        <a href="./index.php" style="color: #4B4A4A;">volver a inicio</a></h6>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>