<?php

include 'php/conexion.php';


$codigoCat= $_GET['codigoCat'];


$instruccion = "DELETE FROM categoria WHERE IdCategoria=" .$codigoCat;

mysqli_query($conexion,$instruccion);
header('location: verCategorias.php');


?>