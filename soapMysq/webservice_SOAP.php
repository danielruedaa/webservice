<?php

require 'lib/nusoap.php';
require 'Conexion.php';
 function muestra()
 {
     $resultado = mysql_query('SELECT * FROM post');
     while ($row = mysql_fetch_array($resultado)) {
         // code...
            $all[] = $row;
     }

     return $all;
 }
/*
 function muestraImagen($categoria)
 {
     if ($categoria == 'espacio') {
         $imagen = 'imagen.png';
     } else {
         $imagen = 'imagen2.png';
     }
     $resultado = '<img src="img/'.$imagen.'">';
 }
*/
//if (!isset($HTTP_RAW_POST_DATA))$HTTP_RAW_POST_DATA=file_get_contents('php://input'))
if (!isset($HTTP_RAW_POST_DATA)) {
    $HTTP_RAW_POST_DATA = file_get_contents('php://input');
}

$server = new soap_server(); //objeto de conexion
$server->configureWSDL('info blog', 'urn:infoBlog');
$server->register('muestra',
 array(),
 array('return' => 'xsd:string'),
 'urn:infoBlog',
 'urn:infoBlog#muestra',
 'rpc',
 'encode',
 'Trae los datos de MySql'
); // asigno los valores
/*
$server->register('muestraImagen',
 array('categoria' => 'xds:string'), //parametro que recibe
 array('return' => 'xsd:string'), //respuesta
 'urn:infoBlog', //namespace
 'urn:infoBlog#muestra', //accion
 'rpc', //estilo
 'encode', //uso
 'Muestra una imagen'

); // asigno los valores
*/
$server->service($HTTP_RAW_POST_DATA); //PERMITE LEER LOS DATOOS DE ENTRADA
