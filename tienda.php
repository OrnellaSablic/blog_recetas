<?php

  require('vistas/header.php');
  require('modelo/modelo.php');

  $productos = traer_todo();

?>
	  <div class="row mx-auto text-center">
        <div class="col-lg-8 mx-auto">
          <h3 class="m-4 p-1 rounded bg-faded">Encontrá todo lo que necesitar <br> para hacer la receta que prefieras...</h3>
        </div>
    </div>

  <div class="row container card-group">
     <?php foreach($productos as $producto){?> 
		<div class=" align-items-end"> 
           
            <div class="col-xl-3 col-2 m-3">
            	<div class="bg-faded rounded producto text-center p-4">
                 	<img src="img/<?php echo $producto['imagen'];?>.png" />
                 	<h4 class="text-left"><?php echo $producto['nombre'];?></h4>
                 	<h5 class="text-left">$<?php echo $producto['precio'];?></h5>
                 	<button class="btn btn-primary">Comprar</button>
             	</div>
             </div>
         
 		</div>
      <?php }?>
  </div>
      


  <!--<div class="row container card-group justify-content-center">
		    <div class="align-items-end">    
            <div class="col-xl-3 col-6 mt-4">
            	<div class="bg-faded rounded producto text-center p-4">
                 	<img src="img/azucar.png" />
                 	<h4 class="text-left">Azúcar</h4>
                 	<h5 class="text-left">$70</h5>
                 	<button class="btn btn-primary">Comprar</button>
             	</div>
             </div>
 		   </div>
       <div class="align-items-end">
             <div class="col-xl-3 col-6 mt-4">
                <div class="bg-faded rounded producto text-center p-4">
                      <img src="img/gelatina.png" />
                      <h4 class="text-left">Gelatina</h4>
                      <h5 class="text-left">$50</h5>
                      <button class="btn btn-primary">Comprar</button>
                </div>
             </div>
       </div>
       <div class="align-items-end">
             <div class="col-xl-3 col-6 mt-4">
                <div class="bg-faded rounded producto text-center p-4">
                      <img src="img/chocolate.png" />
                      <h4 class="text-left">Chocolate</h4>
                      <h5 class="text-left">$100</h5>
                      <button class="btn btn-primary">Comprar</button>
                </div>
             </div>
       </div>
       <div class="align-items-end">    
            <div class="col-xl-3 col-6 mt-4">
            	<div class="bg-faded rounded producto text-center p-4">
                 	<img src="img/dulce-de-leche.png" />
                 	<h4 class="text-left">Mermelada</h4>
                 	<h5 class="text-left">$150</h5>
                 	<button class="btn btn-primary">Comprar</button>
             	</div>
             </div>  
 		   </div>
    </div>-->


<?php

  require('vistas/footer.php');

?>