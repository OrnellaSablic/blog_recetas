<?php

  require('vistas/header.php');
  

  $productos = traer_productos();

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
                 	<a class="btn btn-primary" href="/carrito.php/<?php echo $producto['id'];?>">Comprar</a>
             	</div>
             </div>
         
 		</div>
      <?php }?>
  </div>
      


<?php

  require('vistas/footer.php');

?>