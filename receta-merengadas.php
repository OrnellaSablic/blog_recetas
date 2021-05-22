<?php

  require('vistas/header.php');
   require('modelo/modelo.php');

  $receta = traer_por_id(6);


?>
<main>
  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex mr-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">Galletitas</span>
              <span class="section-heading-lower"><?php echo $receta['nombre'];?></span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/<?php echo $receta['imagen'];?>.jpg" alt="imagen de galletitas merengadas caseras">
        <div class="product-item-description d-flex ml-auto">
          <div class="bg-faded p-5 rounded">
            <h4 class="mb-0">Ingredientes</h4>
              <div class=container>
                <ul>
                  <li>Harina 0000: 250grs.</li>
                  <li>Manteca o margarina: 150grs</li>
                  <li>Azúcar común: 100grs.</li>
                  <li>Huevos: 1</li>
                  <li>Esencia de vainilla: 1cta.</li>
                  <li>Coco rallado (cantidad necesaria)</li>
                </ul>
                  <ul><p>Para el relleno:</p>
                    <li>Gelatina de frambuesa:1 sobre</li>
                    <li>Claras de huevo: 2</li>
                    <li>Azúcar: 150grs.</li>
                    <li>Agua: 30cc.</li>
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