<?php

$dia = array("domingo", "lunes", "martes", "miercoles", "jueves", 
    "viernes", "sabado");

echo $dia[0]; 
// Resultado-> "domingo"

echo "<br>";

$dia[5]= "viernes";
echo "<pre>";
print_r($dia);
echo "<pre>";
// Resultado-> Reescribe la posición 5, coincide con el día que ya estaba

echo "<br>";
$dia[7]= "viernes";
echo "<pre>";
print_r($dia);
echo "<pre>";
// Resultado-> Añade una posición al final (viernes - sabado - viernes)