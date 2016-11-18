<?php

$url = 'http://localhost/html/webservice_p/rest/alumno.php';

$JSON = file_get_contents($url); //tomo la informacion

$datos = json_decode($JSON); //convierte el json a php objeto

echo  $datos->nombre; //uso el dato del arreglo
