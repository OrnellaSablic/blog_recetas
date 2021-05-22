<?php

  require('vistas/header.php');
  require('modelo/modelo.php');

  $receta = traer_por_id(3)

?>
<main>
  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex mr-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">Facturas</span>
              <span class="section-heading-lower"><?php echo $receta['nombre'];?></span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/<?php echo $receta['imagen'];?>.png" alt="imagen de tortitas negras(facturas)">
        <div class="product-item-description d-flex ml-auto">
          <div class="bg-faded p-5 rounded">
            <h4 class="mb-0">Ingredientes</h4>
            <div class=container>
              <ul>
                <li>Harina 0000: 500grs.</li>
                <li>Levadura seca: 10grs</li>
                <li>Manteca o margarina: 200grs</li>
                <li>Sal: 10 grs.</li>
                <li>Leche: 250cc.</li>
                <li>Azúcar común: 50grs.</li>
                <li>Esencia de vainilla c/n</li>
                <li>Azucar fantasía negro (cantidad necesaria)</li>
              </ul>
              <ul>Para la corteza:
                <li>Azucar fantasía negro: 250 grs..</li>
                <li>Harina: 25 grs</li>
                <li>Esencia de vainilla: 1 cdta.</li>
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