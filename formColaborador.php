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
    <form action="insertarColaborador.php" method="post">
        <input type="text" name="apellidos" placeholder="Apellidos"><br>
        <input type="text" name="nombre" placeholder="Nombre"><br>
        <input type="text" name="cargo" placeholder="Cargo"><br>
        <input type="text" name="tratamiento" placeholder="Tratamiento"><br>
        <input type="date" name="fechaNacimiento" placeholder="Fecha de Nacimiento"><br>
        <input type="date" name="fechaContratacion" placeholder="Fecha de Contratación"><br>
        <input type="text" name="direccion" placeholder="Dirección"><br>
        <input type="text" name="ciudad" placeholder="Ciudad"><br>
        <input type="text" name="region" placeholder="Región"><br>
        <input type="text" name="codPostal" placeholder="Código Postal"><br>
        <input type="text" name="pais" placeholder="País"><br>
        <input type="text" name="telDomicilio" placeholder="Teléfono Domicilio"><br>
        <input type="text" name="extension" placeholder="Extensión"><br>
        <input type="text" name="foto" placeholder="Foto"><br>
        <input type="text" name="notas" placeholder="Notas"><br>
        <input type="text" name="jefe" placeholder="Jefe"><br>
        <input type="submit" value="Guardar Colaborador">
    <!-- Cierra el formulario aquí -->
    </form>
</body>
</html>



