<?php

//$server = 'localhost';
//$username = 'root';
//$password = '';
//$database = 'blog_recetas';

//$conexion = mysqli_connect($server, $username, $password, $database);
//if(!$conexion){
//	die("<script>alert('Comentario realizado con éxito')</script>");
//}


//PRODUCTOS

function traer_todo(){

error_reporting(E_ALL);
ini_set('display_errors', 1);

$conexion = mysqli_connect('localhost', 'root', '', 'blog_recetas');

$query = "SELECT * FROM productos";

$resultado = $conexion->query($query);

$productos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

mysqli_close($conexion);


return $productos;


}


function traer_por_id($id){

error_reporting(E_ALL);
ini_set('display_errors', 1);

$conexion = mysqli_connect('localhost', 'root', '', 'blog_recetas');

$query = "SELECT * FROM recetas WHERE id =" .$id;

$resultado = $conexion->query($query);

$receta = mysqli_fetch_array($resultado, MYSQLI_ASSOC);


mysqli_close($conexion);


return $receta;

}


function enviar_comentario(){
	error_reporting(0);
	ini_set('display_errors', 1);

	$conexion = mysqli_connect('localhost', 'root', '', 'blog_recetas');

if(isset($_POST['submit'])){
      $nombre = $_POST['nombre'];
      $contenido = $_POST['contenido'];
      $fecha = $_POST['fecha'];

      $query = "INSERT INTO comentarios (nombre, contenido, fecha) VALUES ('$nombre', '$contenido', '$fecha')";

      $result = mysqli_query($conexion, $query); 
      if($result){
        echo "<script>alert('Comentario realizado con éxito')</script>";
      }else{
        echo "<script>alert('El comentario no se realizó con éxito')</script>";
      }



   }

}







?>