<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Colaboradores</title>
</head>
<body>
    <h1>Registro de Proveedores</h1>
    <!-- Abre el formulario aquí -->
    <form action="insertarProveedor.php" method="post">
        <input type="text" name="nombreCompania" placeholder="Nombre Compañía"><br>
        <input type="text" name="nombreContacto" placeholder="Nombre Contacto"><br>
        <input type="text" name="cargoContacto" placeholder="Cargo Contacto"><br>
        <input type="text" name="direccion" placeholder="Dirección"><br>
        <input type="text" name="ciudad" placeholder="Ciudad"><br>
        <input type="text" name="region" placeholder="Región"><br>
        <input type="text" name="codPostal" placeholder="Código Postal"><br>
        <input type="text" name="pais" placeholder="País"><br>
        <input type="text" name="telefono" placeholder="Teléfono"><br>
        <input type="text" name="fax" placeholder="Fax"><br>
        <input type="text" name="paginaPrincipal" placeholder="Página Principal"><br>
        <input type="submit" value="Guardar Proveedor">
    <!-- Cierra el formulario aquí -->
    </form>
</body>
</html>
