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
<h1>Listado de categorías</h1>
<a href="formCategoria.php">Agregar Categoría</a>
<h2>HTML Table</h2>

<table>
  <tr>
    <th>Categoría</th>
    <th>Descripción</th>
    <th>Ubicación Foto</th>
    <th>Editar</th>
    <th>Eliminar</th>
  </tr>

  <?php
  $instruccionSQL = "SELECT * FROM categoria";
  $resultado = mysqli_query($conexion, $instruccionSQL);
  while ($r = mysqli_fetch_assoc($resultado)) {
   
    
    echo "<tr><td>".$r['NombreCategoria']."</td>
    <td>".$r['Descripcion']."</td>
    <td>".$r['ubicacion']."</td>
    <td> <a href='formActualizaCategoria.php?codigoCat=".$r['IdCategoria']."'><svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6 botones'>
      <path stroke-linecap='round' stroke-linejoin='round' d='M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10' />
    </svg></a> </td>
    <td><a href='EliminarCategoria.php?codigoCat=".$r['IdCategoria']."'><svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6 botones'>
    <path stroke-linecap='round' stroke-linejoin='round' d='M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0' />
  </svg>
   </a>  </td></tr>";
   
  }
  ?>

  
</table>

</body>
</html>
