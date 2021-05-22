<?php

  require('vistas/header.php');
  require('modelo/modelo.php');

  $receta = traer_por_id(1);


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
  </section>
  </main>

<?php

  require('vistas/footer.php');

?>