<?php
include 'punto_2.html';
$correctas = null;
$incorrectas = null;
$blanco = null;
$total = null;
//metodo POST
//isset determina si una variable es nula o no
if (isset($_POST['operador'])) {

    $correctas = $_POST['correctas'];
    $incorrectas = $_POST['incorrectas'];
    $blanco =  $_POST['blanco'];
    $total_correctas = $correctas * 4;
    $total = $total_correctas - $incorrectas;

    echo 'Su Puntaje Final es' .$total;
}
