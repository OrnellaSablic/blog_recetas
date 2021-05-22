<?php

  require('vistas/header.php');
  require('modelo/modelo.php');

  $receta = traer_por_id(4);

?>
  <main>
  <section class="page-section">
    <div class="container"> 
     <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">Budines</span>
              <span class="section-heading-lower"><?php echo $receta['nombre'];?></span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/<?php echo $receta['imagen'];?>.png" alt="imagen de budin de pan" width="500px">
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            <h4 class="mb-0">Ingredientes</h4>
            <div class=container>
                <ul>
                  <li>Pan: 250grs.</li>
                  <li>Harina: 250grs</li>
                  <li>Leche:500cc.</li>
                  <li>Azúcar común: 50grs.</li>
                  <li>Huevos: 3</li>
                  <li>Esencia de vainilla: 1cta.</li>
                </ul>
                <ul>Para el caramelo:
                  <li>Azúcar: 200grs.</li>
                  <li>Agua:20cc.</li>
                </ul>
            </div>
              <h4 class="mb-0">Procedimiento</h4>
              <p class="mb-0"><?php echo $receta['descripcion'];?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  </main>

<?php

  require('vistas/footer.php');

?>