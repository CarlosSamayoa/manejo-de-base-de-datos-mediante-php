<?php
include 'php/conexion.php';

$codigoColab = $_GET['codigoColab'];

$instruccionSQL = "SELECT * FROM colaboradores WHERE IdEmpleado=".$codigoColab;
$resultado = mysqli_query($conexion, $instruccionSQL);

$ApellidosCat="";
$NombreCat="";
$CargoCat="";
$TratamientoCat="";
$FechaNacimientoCat="";
$FechaContratacionCat="";
$DireccionCat="";
$CiudadCat="";
$RegionCat="";
$CodPostalCat="";
$PaisCat="";
$TelDomicilioCat="";
$ExtensionCat="";
$fotoCat="";
$notas=""; // Agregada
$jefe=""; // Agregada

while($r=mysqli_fetch_assoc($resultado)){
    $ApellidosCat=$r['Apellidos'];
    $NombreCat=$r['Nombre'];
    $CargoCat=$r['Cargo'];
    $TratamientoCat=$r['Tratamiento'];
    $FechaNacimientoCat=$r['FechaNacimiento'];
    $FechaContratacionCat=$r['FechaContratacion'];
    $DireccionCat=$r['Direccion'];
    $CiudadCat=$r['Ciudad'];
    $RegionCat=$r['Region'];
    $CodPostalCat=$r['CodPostal'];
    $PaisCat=$r['Pais'];
    $TelDomicilioCat=$r['TelDomicilio'];
    $ExtensionCat=$r['Extension'];
    $fotoCat=$r['foto'];
    $notas=$r['notas']; // Agregada
    $jefe=$r['jefe']; // Agregada
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Colaboradores</title>
</head>
<body>
<h1>Registro de Colaboradores</h1>
<!-- Abre el formulario aquí -->
<form action="actualizaColaborador.php" method="post">
    <input type="text" name="apellidos" placeholder="Apellidos" value="<?php echo $ApellidosCat; ?>"><br>
    <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $NombreCat; ?>"><br>
    <input type="text" name="cargo" placeholder="Cargo" value="<?php echo $CargoCat; ?>"><br>
    <input type="text" name="tratamiento" placeholder="Tratamiento" value="<?php echo $TratamientoCat; ?>"><br>
    <input type="date" name="fechaNacimiento" placeholder="Fecha de Nacimiento" value="<?php echo $FechaNacimientoCat; ?>"><br>
    <input type="date" name="fechaContratacion" placeholder="Fecha de Contratación" value="<?php echo $FechaContratacionCat; ?>"><br>
    <input type="text" name="direccion" placeholder="Dirección" value="<?php echo $DireccionCat; ?>"><br>
    <input type="text" name="ciudad" placeholder="Ciudad" value="<?php echo $CiudadCat; ?>"><br>
    <input type="text" name="region" placeholder="Región" value="<?php echo $RegionCat; ?>"><br>
    <input type="text" name="codPostal" placeholder="Código Postal" value="<?php echo $CodPostalCat; ?>"><br>
    <input type="text" name="pais" placeholder="País" value="<?php echo $PaisCat; ?>"><br>
    <input type="text" name="telDomicilio" placeholder="Teléfono Domicilio" value="<?php echo $TelDomicilioCat; ?>"><br>
    <input type="text" name="extension" placeholder="Extensión" value="<?php echo $ExtensionCat; ?>"><br>
    <input type="text" name="foto" placeholder="Foto" value="<?php echo $fotoCat; ?>"><br>
    <input type="text" name="notas" placeholder="Notas" value="<?php echo $notas; ?>"><br>
    <input type="text" name="jefe" placeholder="Jefe" value="<?php echo $jefe; ?>"><br>
    <input type="hidden" name="codColab" value="<?php echo $codigoColab; ?>">
    <input type="submit" value="Guardar Cambios">
<!-- Cierra el formulario aquí -->
</form>

</body>
</html>



