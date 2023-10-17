<?php
include 'php/conexion.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Menu desplegable</h1>

    <form action="verInfor.php" method="post">
    <input type="text" name="nombreProducto"><br>
    <select name="codCategoria" >
        <?php
    $instruccion="SELECT*FROM categoria";
    $resultado=mysqli_query($conexion,$instruccion);

    while($r=mysqli_fetch_assoc($resultado)){
      echo "  <option value='".$r['IdCategoria']."'>".$r['NombreCategoria']."</option>";
    }
    ?>
    </select>
    <input type="submit" value="Enviar datos">
    </form>
</body>
</html>



