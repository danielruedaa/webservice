<?php

$cursosURL = 'http://localhost/html/webservice_p/rest_http/API/alumnos/cursos';
$alumnosURL = 'http://localhost/html/webservice_p/rest_http/API/alumnos/lista';

$cursosJson = file_get_contents($cursosURL);
$alumnoJson = file_get_contents($alumnosURL);

$cursos = json_decode($cursosJson);
$alumno = json_decode($alumnoJson);

echo 'Alumnos';

echo '<ul>';
foreach ($alumno as $key => $value) {
    echo '<li>'.$value.'</li>';
}
echo '</ul>';

echo 'Cursos disponibles';
echo '<ul>';
foreach ($cursos as $key => $value) {
    echo '<li>'.$value.'</li>';
}
echo '</ul>';
