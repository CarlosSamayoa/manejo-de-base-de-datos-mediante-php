<?php

include 'php/conexion.php';

$nombreCategoria = $_POST['nombreCategoria'];
$descripcionCategoria = $_POST['descripcionCategoria'];
$ubicacionFoto = $_POST['ubicacionFoto'];
$codCategoria = $_POST['codCategoria'];

$instruccion = "UPDATE `categoria` SET `NombreCategoria` = '$nombreCategoria', 
`Descripcion` = '$descripcionCategoria', 
`ubicacion` = '$ubicacionFoto' WHERE
`categoria`.`IdCategoria` = $codCategoria";

mysqli_query($conexion, $instruccion);
header('location: verCategorias.php');
?>
