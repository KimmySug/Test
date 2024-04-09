<?php

function insertar_provincia($codigo,$nombre)
{
    include './conexion.php';
    $consulta = "INSERT INTO `provincias` (`codigo`, `nombre`) VALUES(NULL,'$codigo','$nombre');";
    $resultado = mysqli_query($conexion,$consulta);
    return $resultado;
}