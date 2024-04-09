<?php

function insertar_camion($modelo, $tipo, $potencia)
{
    include './conexion.php';
    $consulta = "INSERT INTO `camiones` (`matricula`, `modelo`, `tipo`, `potencia`) VALUES(NULL,'$modelo','$tipo','$potencia');";
    $resultado = mysqli_query($conexion,$consulta);
    return $resultado;

}

insertar_camion('2012','continental','v6');