<?php
// los datos que deseas leer
header('Content-Type: application/json');

 function mostrar_alumno()
 {
     // code...
  $alumno = array('nombre' => 'andres',
'apellido' => 'dias',
'pais' => 'chile',
'cursos' => '5',
'usuarios' => 'shofry', );

     return $alumno;
 }

 echo json_encode(mostrar_alumno());
