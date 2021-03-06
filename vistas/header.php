<?php

  require('controlador/controlador.php');

  $recetas = mostrar_recetas();

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Mi Blog de Recetas</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">

  <script src="https://kit.fontawesome.com/b022c73f3f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
  <script type="text/javascript" src="js/index.js" defer></script>
</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <!-- <span class="site-heading-upper text-primary mb-3">A Free Bootstrap 4 Business Theme</span> -->
    <a class ="titulo-blog" href="index.php"><span class="site-heading-lower">Mi blog de Recetas</span></a>
  </h1>
 
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-expanded d-lg-none" href="#">Mi blog de recetas</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="about.php">Sobre m??</a>
          </li>
          
            <li class="nav-item dropdown">

              <a class="nav-link dropdown-toggle text-uppercase" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Recetario</a>
             
                <div class="dropdown-menu">
                    <?php foreach($recetas as $receta){?>
                    <a class="dropdown-item" href="recetas.php?id=<?php echo $receta['id'];?>&nombre=<?php echo $receta['nombre'];?>&imagen=<?php echo $receta['imagen'];?>&descripcion=<?php echo $receta['descripcion'];?>"><?php echo $receta['nombre'];?></a>
                  <?php }?>
                </div>
                </li>
                 
                  <li class="nav-item px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="tienda.php">Tienda</a>
                </li>
                <li class="nav-item px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="contacto.php">Contacto</a>
                </li>
              </ul>
               <span>
                  <a href="carrito.php"><i class="fas fa-shopping-basket" style="color: rgb(0 0 0);"></i></a>
                </span>
            </div>
    </div>
  </nav>
</html>
