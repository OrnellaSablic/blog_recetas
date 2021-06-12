<?php

require('modelo/modelo.php');

//PRODUCTOS

function traer_productos(){

error_reporting(E_ALL);
ini_set('display_errors', 1);

$conexion = mysqli_connect('localhost', 'root', '', 'blog_recetas');

$query = "SELECT * FROM productos";

$resultado = $conexion->query($query);

$productos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

mysqli_close($conexion);

return $productos;

}

//Mostar recetas en el menu de la pagina

function mostrar_recetas(){

error_reporting(E_ALL);
ini_set('display_errors', 1);

$conexion = mysqli_connect('localhost', 'root', '', 'blog_recetas');

$query = "SELECT * FROM recetas";

$resultado = $conexion->query($query);

$recetas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

mysqli_close($conexion);


return $recetas;


}


function enviar_comentario(){
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	$conexion = mysqli_connect('localhost', 'root', '', 'blog_recetas');

if(isset($_POST['submit'])){
      $nombre = $_POST['nombre'];
      $contenido = $_POST['contenido'];
      

      $query = "INSERT INTO comentarios (nombre, contenido) 
      VALUES ('$nombre', '$contenido')";

      $resultado = mysqli_query($conexion, $query); 
      if($resultado){
        echo "<script>alert('Comentario realizado con éxito')</script>";
      }else{
        echo "<script>alert('Hubo un error al enviar el comentario')</script>";
      }
   }
mysqli_close($conexion);

}









?>