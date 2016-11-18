<?php

require 'lib/nusoap.php';

//creamos un elemento que se conecte al nusoap
$cliente = new nusoap_client('http://localhost/html/webservice_p/soapMysq/webservice_SOAP.php');

$libros = $cliente->call('muestra'); //llamo la funcion
//$imagen = $cliente->call('muestraImagen', array('categoria' => 'espacio'));

echo '<h1> definicion <h1>';
$err = $cliente->getError();
if ($err) {
    echo '<h1> constructor malo <h1>'.$err;
} else {
    echo $libros;
}

/*
echo '<ul>';

foreach ($libros as $key => $value) {
    // code...
    echo '<li>';
    echo'<strong>'.$value['nombre'].'</strong><br>';
    echo $value['post'];
    echo '<br></li>';
}

echo '</ul>';
*/
