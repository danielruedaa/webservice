<?php

require 'lib/nusoap.php';

function muestra()
{
    $planetas = 'cuerpos que conforman un sistema solar';

    return $planetas;
}

function muestraImagen($categoria)
{
    if ($categoria == 'espacio') {
        $imagen = 'imagen.png';
    } else {
        $imagen = 'imagen2.png';
    }
    $resultado = '<img src="img/'.$imagen.'">';

    return $resultado;
}

if (!isset($HTTP_RAW_POST_DATA)) {
    $HTTP_RAW_POST_DATA = file_get_contents('php://input');
}

$server = new soap_server(); //objeto de conexion
$server->configureWSDL('info blog', 'urn:infoBlog');

$server->register('muestra',
 array(), //parametro que recibe
 array('return' => 'xsd:string'),
 'urn:infoBlog',
 'urn:infoBlog#muestra',
 'rpc',
 'encode',
 'Muestra el contenido para el blog'
); // asigno los valores

$server->register('muestraImagen',
 array('categoria' => 'xds:string'),
 array('return' => 'xsd:string'),
 'urn:infoBlog',
 'urn:infoBlog#muestraImagen',
 'rpc',
 'encode',
 'Muestra una imagen para el blog'
); // asigno los valores

$server->service($HTTP_RAW_POST_DATA); //PERMITE LEER LOS DATOOS DE ENTRADA

/*
significado de como se arma el
$server->register("muestra",
 array( );//parametro que recibe
 array('return'=>'xsd:string'),//respuesta
 'urn:infoBlog',//namespace
 'urn:infoBlog#muestra',//accion
 'rpc',//estilo
 'encode'//uso
 'Muestra el contenido para el blog';
);// asigno los valores
*/
