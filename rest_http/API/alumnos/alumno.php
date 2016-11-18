<?php

header('Content-Type: application/json');

//print_r($_GET); // toma el archivo que esta llegado por url

function mostar_curso()
{
    // code...
  $cursos = array('angular', 'MongoDB', 'php', 'ux', 'ruby');

    return $cursos;
}

 function mostrar_alumno()
 {
     // code...
  $alumno = array('andres', 'antonio', 'paola', 'jesus', 'juan');

     return $alumno;
 }
 if ($_GET['solicitud'] == 'cursos') {
     // code...
     $resultados = mostar_curso();
 } elseif ($_GET['solicitud'] == 'lista') {
     // code...
   $resultados = mostrar_alumno();
 } else {
     header('HTTP/1.1 4.5 Method not allowed');
     exit;
 }

 echo json_encode($resultados);
