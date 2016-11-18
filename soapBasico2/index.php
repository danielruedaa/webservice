<?php

require_once 'lib/nusoap.php';
//creamos un elemento que se conecte al nusoap
$cliente = new nusoap_client('http://localhost/html/webservice_p/soapBasico2/webservice_SOAP.php?wsdl&debug=0', 'wsdl');
$planeta = $cliente->call('muestra'); //llamo la funcion
$imagen = $cliente->call('muestraImagen', array('categoria' => 'espacio'));

//print_r($cliente);
//validacion si ocurre un error en la instancia del cliente
echo '<h1> definicion <h1>';

$err = $cliente->getError();
if ($err) {
    echo '<h1> constructor malo <h1>'.$err;
} else {
    echo $planeta.'<br/>';
    echo $imagen;
}
