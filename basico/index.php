<?php

$curl = curl_init('http://localhost/html/webservice_p/basico/base.txt');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$respuesta = curl_exec($curl); // trae los datos
$info = curl_getinfo($curl); //arreglo asociativo

if ($info['http_code'] == 200) {
    // code...
    $datos = explode(',', $respuesta); //hago un arreglo
    echo '<h1> Furtas disponibles<h1>';
    foreach ($datos as $key => $value) {
        // code...
        echo 'fruta'.$value;
    }
} else {
    echo 'error'.$curl_error($cul);
}
