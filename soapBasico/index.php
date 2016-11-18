<?php

require 'lib/nusoap.php';
//creamos un elemento que se conecte al nusoap
$cliente = new nusoap_client('http://localhost/html/webservice_p/soapBasico/webservice_SOAP.php');
$planeta = $cliente->call('muestra'); //llamo la funcion
$imagen = $cliente->call('muestraImagen', array('categoria' => 'espacio'));

//validacion si ocurre un error en la instancia del cliente
echo '<h1> definicion <h1>';

$err = $cliente->getError();
if ($err) {
    echo '<h1> constructor malo <h1>'.$err;
} else {
    echo $planeta.'<br/>';
    echo $imagen;
}
