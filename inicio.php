<?php
    session_start();
    if (empty($_SESSION["id"])) {
    header("location: index.php");
    }
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
<h2 class="text-center mt-4">DASHBOARD</h2>
</div>
<div class="container"> 
  <div class="row">
  <div class="col-md-6">
    <div class="form-color mt-4">
      <h4 class="text-center mt-2">Aprobar usuarios</h4>
      <?php
        include "controllers/listaUsersController.php"
      ?>
      <div class="container">
          <table class="table">
            <thead  class="table-dark">
                <tr class="text-center">
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
              <?php
                while($datos= mysqli_fetch_array($sql)){
              ?>
                <tr class="text-center">
                <td><?php  echo $datos["nombre"] ?></td>
                <td><?php  echo $datos["email"] ?></td>
                <td>
                  <a 
                  href="/pruebaTecnica/controllers/aprobarUserController.php?id=<?php  echo $datos["id"] ?>"
                  name="btnregister" 
                  type="submit" 
                  class="btn btn-primary btn-sm" 
                  >Aprobar
                </a>
                <a 
                  href="/pruebaTecnica/controllers/rechazarUserController.php?id=<?php  echo $datos["id"] ?>"
                  name="btnregister" 
                  type="submit" 
                  class="btn btn-danger btn-sm" 
                  >Rechazar
                </a>
                </td>
                </tr>
                <?php
                }
              ?>
            </tbody>
         </table>

      </div>
      <br>

    </div>
  </div>
  <div class="col-md-6">
    <div class="form-color mt-4">
      <h4 class="text-center mt-4">Noticias</h4>
      <div class="container">
          <table class="table">
            <thead class="table-dark">
            
                <tr class="text-center">
                <th scope="col">Titulo</th>
                <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include ("controllers/listarNoticiaController.php");
                while($datos1= mysqli_fetch_array($sql1)){
              ?>
                <tr class="text-center">
                <td><?php  echo $datos1["titulo"] ?></td>
                <td> <a 
                  href="/pruebaTecnica/noticia.php?id=<?php  echo $datos1["id_noticia"] ?>"
                  name="btnregister" 
                  type="submit" 
                  class="btn btn-primary btn-sm" 
                  >Ver mas
                </a></td>
                </tr>
                <?php
                }
              ?>
            </tbody>
         </table>
          <br>
      </div>
    </div>
  </div>
  </div>

  <div class="row">
  <div class="form-color mt-4">
      <h4 class="text-center mt-4">Crear noticias</h4>
      <div class="container">
      <?php
        include "controllers/crearNoticiaController.php"
      ?>
          <form method="post" action="" class="mt-4 mx-4" enctype="multipart/form-data">
            <div class="row">
              <div class="mb-3 item-center col-md-6">
                <input name="titulo"  type="text" class="form-control"  placeholder="Titulo" autocomplete="off" >
              </div>
              <div class="mb-3 col-md-6">
                <input name="medio" type="text" class="form-control"  placeholder="Medio" autocomplete="off" >
              </div>
              <div class="mb-3 col-md-6">
                <input name="fecha" type="date" id="date"class="form-control" placeholder="Fecha"  autocomplete="off">
              </div>
              <div class="mb-3 col-md-6">
                <input name="archivo" type="file" class="form-control" placeholder="Contraseña"  autocomplete="off">
              </div>
              <div class="mb-3 text-center">
              <input name="btnregisternoticia" type="submit" class="btn btn-outline-primary" value="GUARDAR" ></input>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>


    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>