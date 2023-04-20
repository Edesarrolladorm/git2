<?php 
include 'punto_2.html';
//ejercicio modulo  3 asistenci
$nota = null;
$asis = null;
const CLASES = 30;
  if (isset($_POST['operador'])) 
   {
    $nota = $_POST ['nota'];
    $asis = $_POST ['asis'];
    if ($nota >= 1 && $asis >= (CLASES*0.8)) {
      echo 'Aprobo';
    }
    else {
        echo 'No aprobo';
    }
  }



?>