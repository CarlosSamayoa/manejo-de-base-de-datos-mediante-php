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
$codColab = $_POST['codColab'];


$instruccion = "UPDATE `colaboradores` SET `IdEmpleado`='$codColab',
`Apellidos`='$apellidos',
`Nombre`='$nombre',
`Cargo`='$cargo',
`Tratamiento`='$tratamiento',
`FechaNacimiento`='$fechaNacimiento',
`FechaContratacion`='$fechaContratacion',
`Direccion`='$direccion',
`Ciudad`='$ciudad',
`Region`='$region',
`CodPostal`='$codPostal',
`Pais`='$pais',
`TelDomicilio`='$telDomicilio',
`Extension`='$extension',
`foto`='$foto',
`notas`='$notas',
`jefe`='$jefe' WHERE 
`colaboradores`.`IdEmpleado`='$codColab'";

mysqli_query($conexion, $instruccion);
header('location: vercolaboradores.php');
?>