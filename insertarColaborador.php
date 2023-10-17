<?php
include 'php/conexion.php';

$apellidos = $_POST['apellidos'];
$nombre = $_POST['nombre'];
$cargo = $_POST['cargo'];
$tratamiento = $_POST['tratamiento'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$fechaContratacion = $_POST['fechaContratacion'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$region = $_POST['region'];
$codPostal = $_POST['codPostal'];
$pais = $_POST['pais'];
$telDomicilio = $_POST['telDomicilio'];
$extension = $_POST['extension'];
$foto = $_POST['foto'];
$notas = $_POST['notas'];
$jefe = $_POST['jefe'];
$instruccion = "INSERT INTO colaboradores (Apellidos, Nombre, Cargo, Tratamiento, FechaNacimiento, FechaContratacion, Direccion, Ciudad, Region, CodPostal, Pais, TelDomicilio, Extension, foto, notas, jefe) 
                VALUES ('$apellidos', '$nombre', '$cargo', '$tratamiento', '$fechaNacimiento', '$fechaContratacion', '$direccion', '$ciudad', '$region', '$codPostal', '$pais', '$telDomicilio', '$extension', '$foto', '$notas', '$jefe')";

mysqli_query($conexion, $instruccion);
header('location: verColaboradores.php');
?>