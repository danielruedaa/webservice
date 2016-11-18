<?php

include 'Conexion.php';

header('Content-Type: application/json');

function mostrar_post($detalle, $con)
{
    if ($detalle == 'lista') {
        $sql1 = 'SELECT post FROM post';
        $resultado = mysqli_query($con, $sql1) or die(mysql_error());
    } else {
        $sql2 = 'SELECT post FROM post where id='.$detalle;
        $resultado = mysqli_query($con, $sql2) or die(mysql_error());
    }
    while ($fila = mysqli_fetch_array($resultado)) {
        // code...
    $todos_los_post[] = $fila;
    }

    print_r($todos_los_post);

    return $todos_los_post;
}

function mostrar_autores($detalle, $con)
{
    if ($detalle == 'autor') {
        $sql = 'SELECT nombre  FROM post';
        $resultado = mysqli_query($con, $sql) or die(mysql_error());
    } else {
        $sql_n = 'SELECT nombre FROM post  where id='.$detalle;
        $resultado = mysqli_query($con, $sql_n) or die(mysql_error());
    }
    while ($fila = mysqli_fetch_array($resultado)) {
        // code...
    $todos_los_autores[] = $fila;
    }

    return $todos_los_autores;
    print_r($todos_los_autores);
}

if ($_GET['peticion'] == 'post') {
    // code...
  $resultado = mostrar_post($_GET['detalle'], $con);
} elseif ($_GET['peticion'] == 'autor') {
    // code...
    $resultado = mostrar_autores($_GET['detalle'], $con);
} else {
    header('HTTP/1.1 405 Method Not Allowed');
    exit;
}

echo json_encode($resultado);

print_r($resultado);
