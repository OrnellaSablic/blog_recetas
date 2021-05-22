<?php

function traer_todo(){

error_reporting(E_ALL);
ini_set('display_errors', 1);

$conexion = mysqli_connect('localhost', 'root', '', 'blog_recetas');

$query = "SELECT * FROM recetas";

$resultado = $conexion->query($query);

$recetas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

mysqli_close($conexion);


return $recetas;


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


?>