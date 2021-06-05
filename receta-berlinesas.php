<?php

  require('vistas/header.php');
  require('modelo/modelo.php');
  

  $receta = traer_por_id(1);
   
  enviar_comentario();

?>
  <main>
  <section class="page-section">
    <div class="container"> 
     <div class="product-item">

        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">Facturas</span>
              <span class="section-heading-lower"><?php echo $receta['nombre'];?></span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/<?php echo $receta['imagen'];?>.jpg" alt="imagen de facturas berlinesas">
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            <h4 class="mb-0">Ingredientes</h4>
            <div class=container>
              <ul>
                <li>Harina 0000: 500grs.</li>
                <li>Manteca o margarina: 100grs</li>
                <li>Sal: 1 pizca</li>
                <li>Azúcar común: 100grs.</li>
                <li>Huevos: 1</li>
                <li>Levadura seca: 10grs.</li>
                <li>Leche tibia: 250ml.</li>
                <li>Esencia de vainilla</li>
                <li>Dulce de leche(cantidad necesaria)</li>
                <li>Crema pastelera(cantidad necesaria)</li>
              </ul>
            </div>
              <h4 class="mb-0">Procedimiento</h4>
                <p><?php echo $receta['descripcion'];?></p>
          </div>
        </div>
      </div>
    </div>
    <br>
        <div class="container bg-faded rounded">
              <h4 class="section-heading-upper">Comentarios</h4>
              <div class="container">
                <?php
                  $conexion = mysqli_connect('localhost', 'root', '', 'blog_recetas');
                  $resultado = mysqli_query($conexion, 'SELECT * FROM comentarios');
                      while ($comentario = mysqli_fetch_object($resultado)) {
                  ?>  
                    <hr>
                   <div class="container">
                     <h5><?php echo ($comentario->nombre); ?> dijo:</h5>
                     <p><?php echo ($comentario->contenido); ?></p><br>
                     <p><strong>Fecha de publicación </strong><?php echo ($comentario->fecha); ?></p>
                   </div>   

                  <?php
                  }
                ?>
              </div>
          </div>

        <form action="" method="post">
          <div class="container titulo-contacto">
            <div class="form-group ">
              <div class="form-group ">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="" class="form-control" name ="nombre" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribi tu nombre" required>
            </div>
                <label for="exampleFormControlTextarea1">Dejá tu comentario</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name ="contenido" rows="3"  placeholder="Escribi tu comentario" required></textarea>
              <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary" style="background-color: black" id="enviarMsj">Publicar</button>
              </div>
          </div>
        </form>
  </section>
  </main>

<?php

  require('vistas/footer.php');

?>