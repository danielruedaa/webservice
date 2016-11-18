<?php

require 'lib/nusoap.php';
/**
 * [muestra description].
 *
 * @return [type] [description]
 *                funcion que manda un string
 */
function muestra()
{
    $planeta = 'cuerpos que conforman un sistema solar';

    return $planeta;
}
 /**
  * [muestraImagen description].
  *
  * @param  [type] $categoria [description]
  *
  * @return [type]            [description]
  * Toma la imagen dependiendo de la categoria que llega
  */
 function muestraImagen($categoria)
 {
     if ($categoria == 'espacio') {
         $imagen = 'murcielago.jpg';
     } else {
         $imagen = 'ratigal.jpg';
     }
     $resultado = '<img src="img/'.$imagen.'">';

     return $resultado;
 }
/*
 * Comprovar que no este vacio
 */
if (!isset($HTTP_RAW_POST_DATA)) {
    $HTTP_RAW_POST_DATA = file_get_contents('php://input');
}
/**
 * [$server description].
 *
 * @var soap_server
 *                  Creo el objeto para enviar los datos
 */
$server = new soap_server(); //objeto de conexion
$server->register('muestra'); // asigno los valores
$server->register('muestraImagen'); // asigno los valores
$server->service($HTTP_RAW_POST_DATA); //PERMITE LEER LOS DATOOS DE ENTRADA
