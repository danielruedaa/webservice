<?php

require_once 'lib/nusoap.php';

//creamos un elemento que se conecte al nusoap
$cliente = new nusoap_client('http://wsf.cdyne.com/WeatherWS/Weather.asmx?wsdl', 'wsdl');

$resultado = $cliente->call('GetCityForecastByZIP', array('ZIP' => '90210'));
$ciudad = $resultado->call['GetCityForecastByZIPResult']['city'];
$estado = $resultado->call['GetCityForecastByZIPResult']['state'];

echo '<h1> definicion <h1>';
echo '<br>';
echo $ciudad.' '.$state;
