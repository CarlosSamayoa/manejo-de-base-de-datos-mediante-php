<?php
include 'php/conexion.php';

$nombreCompania = $_POST['nombreCompania'];
$nombreContacto = $_POST['nombreContacto'];
$cargoContacto = $_POST['cargoContacto'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$region = $_POST['region'];
$codPostal = $_POST['codPostal'];
$pais = $_POST['pais'];
$telefono = $_POST['telefono'];
$fax = $_POST['fax'];
$paginaPrincipal = $_POST['paginaPrincipal'];
$codigoProveedor = $_POST['codigoProveedor'];

// Consulta SQL para actualizar la información del proveedor
$instruccion = "UPDATE `proveedores` SET 
    `NombreCompania`='$nombreCompania',
    `NombreContacto`='$nombreContacto',
    `CargoContacto`='$cargoContacto',
    `Direccion`='$direccion',
    `Ciudad`='$ciudad',
    `Region`='$region',
    `CodPostal`='$codPostal',
    `Pais`='$pais',
    `Telefono`='$telefono',
    `Fax`='$fax',
    `PaginaPrincipal`='$paginaPrincipal' 
    WHERE `IdProveedor`='$codigoProveedor'";

// Ejecutar la consulta
if (mysqli_query($conexion, $instruccion)) {
    // Redirigir a la página de visualización de proveedores después de la actualización
    header('location: verproveedores.php');
} else {
    // Manejo de errores si la consulta falla
    echo 'Error en la actualización: ' . mysqli_error($conexion);
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
