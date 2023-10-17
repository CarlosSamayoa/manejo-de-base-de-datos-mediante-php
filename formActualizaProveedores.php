<?php
include 'php/conexion.php';

$codigoProb = $_GET['codigoProb'];

$instruccionSQL = "SELECT * FROM proveedores WHERE IdProveedor=".$codigoProb;
$resultado = mysqli_query($conexion, $instruccionSQL);

$NombreCompania="";
$NombreContacto="";
$CargoContacto="";
$Direccion="";
$Ciudad="";
$Region="";
$CodPostal="";
$Pais="";
$Telefono="";
$Fax="";
$PaginaPrincipal="";

while($r=mysqli_fetch_assoc($resultado)){
    $NombreCompania = $r['NombreCompania'];
    $NombreContacto = $r['NombreContacto'];
    $CargoContacto = $r['CargoContacto'];
    $Direccion = $r['Direccion'];
    $Ciudad = $r['Ciudad'];
    $Region = $r['Region'];
    $CodPostal = $r['CodPostal'];
    $Pais = $r['Pais'];
    $Telefono = $r['Telefono'];
    $Fax = $r['Fax'];
    $PaginaPrincipal = $r['PaginaPrincipal'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Proveedores</title>
</head>
<body>
<h1>Edición de Proveedor</h1>
<!-- Abre el formulario aquí -->
<form action="actualizaProveedores.php" method="post">
    <input type="text" name="nombreCompania" placeholder="Nombre Compañía" value="<?php echo $NombreCompania; ?>"><br>
    <input type="text" name="nombreContacto" placeholder="Nombre Contacto" value="<?php echo $NombreContacto; ?>"><br>
    <input type="text" name="cargoContacto" placeholder="Cargo Contacto" value="<?php echo $CargoContacto; ?>"><br>
    <input type="text" name="direccion" placeholder="Dirección" value="<?php echo $Direccion; ?>"><br>
    <input type="text" name="ciudad" placeholder="Ciudad" value="<?php echo $Ciudad; ?>"><br>
    <input type="text" name="region" placeholder="Región" value="<?php echo $Region; ?>"><br>
    <input type="text" name="codPostal" placeholder="Código Postal" value="<?php echo $CodPostal; ?>"><br>
    <input type="text" name="pais" placeholder="País" value="<?php echo $Pais; ?>"><br>
    <input type="text" name="telefono" placeholder="Teléfono" value="<?php echo $Telefono; ?>"><br>
    <input type="text" name="fax" placeholder="Fax" value="<?php echo $Fax; ?>"><br>
    <input type="text" name="paginaPrincipal" placeholder="Página Principal" value="<?php echo $PaginaPrincipal; ?>"><br>
    <input type="hidden" name="codigoProveedor" value="<?php echo $codigoProb; ?>">
    <input type="submit" value="Guardar Cambios">
<!-- Cierra el formulario aquí -->
</form>

</body>
</html>




