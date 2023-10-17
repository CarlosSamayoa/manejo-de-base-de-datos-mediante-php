<?php
include 'php/conexion.php';

$nombreCategoria = $_POST['nombreCategoria'];
$descripcionCategoria = $_POST['descripcionCategoria'];
$ubicacionFoto = $_POST['ubicacionFoto'];

$instruccion = "INSERT INTO categoria (IdCategoria, NombreCategoria, Descripcion, ubicacion) VALUES (NULL, '$nombreCategoria', '$descripcionCategoria', '$ubicacionFoto')";

mysqli_query($conexion, $instruccion);
header('location: verCategorias.php');
?>

