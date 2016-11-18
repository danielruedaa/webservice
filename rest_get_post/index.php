<?php

$cursosURL = 'http://localhost/html/webservice_p/rest_get_post/API/libros/cursos';
$alumnosURL = 'http://localhost/html/webservice_p/rest_get_post/API/libros/lista';

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
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>


  </head>
  <body>
    <form class="control" action="API/biblioteca/autor/nuevo" method="post">
      <h1> Agregar</h1>
      <label>Autor</label>
      <input type="text" name="autor" >
      <label>libro</label>
      <input type="text" name="titulo">
      <input type="submit" value="enviar">
    </form>


  </body>
</html>
