<?php

function actualizar_camion($matricula,$modelo,$tipo,$potencia)

{
    include './conexion.php';
    $consulta= "UPDATE `camion`SET `matricula`='$matricula',`modelo`= '$modelo' WHERE `camiones`.`matricula`=$matricula;";
    $resultado = mysqli_query ($conexion,$consulta);
    return $resultado;
}
