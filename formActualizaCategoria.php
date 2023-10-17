<?php
include 'php/conexion.php';

$codigoCat= $_GET['codigoCat'];

$instruccionSQL = "SELECT * FROM categoria WHERE IdCategoria=".$codigoCat;
  $resultado = mysqli_query($conexion, $instruccionSQL);
$nombreCat="";
$descricionCat="";
$ubicacionFoto="";
while($r=mysqli_fetch_assoc($resultado)){
    $nombreCat=$r['NombreCategoria'];
    $descricionCat=$r['Descripcion'];
    $ubicacionFoto=$r['ubicacion'];

}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Modificacion de categorias</h1>
    <!-- Abre el formulario aquí -->
    <form action="actualizaCategoria.php" method="post">
        <input type="text" name="nombreCategoria" value="<?php echo $nombreCat;?>" placeholder="Nombre Categoria"><br>
        <input type="text" name="descripcionCategoria"value="<?php echo $descricionCat;?>" placeholder="Descripcion"><br>
        <input type="text" name="ubicacionFoto"value="<?php echo $ubicacionFoto;?>" placeholder="Ingrese ruta de imagen"><br>
        <input type="hidden" value="<?php echo $codigoCat; ?>" name="codCategoria">
        <input type="submit" value="Guardar Cambios">
    <!-- Cierra el formulario aquí -->
    </form>
</body>
</html>