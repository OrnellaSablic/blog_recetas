<?php

  require('vistas/header.php');
  require('modelo/modelo.php');

  $receta = traer_por_id(5);


?>
  <main>
  <section class="page-section">
    <div class="container"> 
     <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">Galletitas</span>
              <span class="section-heading-lower"><?php echo $receta['nombre'];?></span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/<?php echo $receta['imagen'];?>.jpg" alt="imagen de galletitas de chocolate con relleno de vainilla">
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            <h4 class="mb-0">Ingredientes</h4>
              <div class=container>
                <ul>
                  <li>Harina 0000: 170grs.</li>
                  <li>Manteca:80grs.</li>
                  <li>Cacao dulce(el de la chocolatada) 100grs.</li>
                  <li>Huevos: 1</li>
                  <li>Bicarbonato de sodio:½ cdta.</li>
                  <li>Azúcar: 50 grs.</li>
                  <li>Sal: 1 cdta.</li>
                </ul>
                <ul>Para la crema(relleno):
                  <li>Manteca: 50 grs..</li>
                  <li>Azúcar impalpable: 100 grs</li>
                  <li>Esencia de vainilla: 1 cdta.</li>
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