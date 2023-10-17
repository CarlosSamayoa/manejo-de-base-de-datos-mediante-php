<?php
include 'php/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.botones{
  width:25px;
  color: blue;
  text-decoration: none ;

}
</style>
</head>
<body>
<h1>listado de colaboradores</h1>
<a href="formColaborador.php">Agregar Colaborador</a>
<h2>HTML Table</h2>

<table>
  <tr>
    <th>Apellidos</th>
    <th>Nombres</th>
    <th>Cargo</th>
    <th>Tratamiento</th>
    <th>Fecha Nacimiento</th>
    <th>Fecha Contratacion</th>
    <th>Direccion</th>
    <th>Ciudad</th>
    <th>Region</th>
    <th>Codigo postal</th>
    <th>País</th>
    <th>Telefono Domicilio</th>
    <th>extension</th>
    <th>foto</th>
    <th>notas</th>
    <th>Jefe</th>
    <th>Editar</th>
  </tr>

  <?php
  $instruccionSQL = "SELECT * FROM colaboradores";
  $resultado=mysqli_query($conexion,$instruccionSQL);
  while ($r=mysqli_fetch_assoc($resultado)) {
    echo "<tr><td>".$r['Apellidos']."</td><td>".$r['Nombre']."</td><td>".$r['Cargo']."</td>
    <td>".$r['Tratamiento']."</td><td>".$r['FechaNacimiento']."</td><td>".$r['FechaContratacion']."</td>
    <td>".$r['Direccion']."</td><td>".$r['Ciudad']."</td><td>".$r['Region']."</td><td>".$r['CodPostal']."</td>
    <td>".$r['Pais']."</td><td>".$r['TelDomicilio']."</td><td>".$r['Extension']."</td><td>".$r['foto']."</td><td>".$r['notas']."</td><td>".$r['jefe']."</td>
    <td> <a href='formActualizaColaborador.php?codigoColab=".$r['IdEmpleado']."'><svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6 botones'>
      <path stroke-linecap='round' stroke-linejoin='round' d='M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10' />
    </svg></a> </td></tr>";

  }
  ?>
  
  
</table>

</body>
</html>