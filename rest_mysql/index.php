<?php

$publicacionURL = 'http://localhost/html/webservice_p/rest_mysql/API/biblioteca/post';
$autorURL = 'http://localhost/html/webservice_p/rest_mysql/API/biblioteca/autor';

$publicacionJson = file_get_contents($publicacionURL);
$autorJson = file_get_contents($autorURL);

$publicacion = json_decode($publicacionJson);
$autor = json_decode($autorJson);

echo 'Autor';

echo '<ul>';
foreach ($autor as $key => $value) {
    echo '<li>'.$value.'</li>';
}
echo '</ul>';

echo 'publico';
echo '<ul>';
foreach ($publicacion as $key => $value) {
    echo '<li>'.$value.'</li>';
}
echo '</ul>';
