<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registro de categorias</h1>
    <!-- Abre el formulario aquí -->
    <form action="insertarCategoria.php" method="post">
        <input type="text" name="nombreCategoria" placeholder="Nombre Categoria"><br>
        <input type="text" name="descripcionCategoria" placeholder="Descripcion"><br>
        <input type="text" name="ubicacionFoto" placeholder="Ingrese ruta de imagen"><br>
        <input type="submit" value="Guardar Categoria">
    <!-- Cierra el formulario aquí -->
    </form>
</body>
</html>
