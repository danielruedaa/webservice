<?php
//conexion con la base de datos y el servidor
//documento gui http://php.net/manual/es/mysqli.select-db.php

    $con = mysqli_connect('localhost', 'root', 'root', 'base0');
if (!$con) { //si no ha realizado la conexion
    die('No se  a podido realizar la coexion a la BD '.mysql_error());
}
//echo 'conexion exitosa a la base de datos'.'<br>';
