<?php
function listar_provincia_por_codigo($codigo)

{
    include './conexion.php';
    $sql = "SELECT * FROM `provincias` WHERE `codigo` = $codigo";
    $resultado = mysqli_query($conexion,$sql);
    $camionero = mysqli_fetch_assoc($resultado);
    return $provincia;
}