<?php

const SIZE = 20;

$vector = array();

for ($i=0; $i<SIZE; $i++) {
    $vector[$i] = $i+1;
}

echo "<pre>";

foreach ($vector as $value){
    echo "Valor: $value\n";
}

echo "<br>";

rsort($vector);

for ($i=0; $i<SIZE;$i++) {
    echo "Valor: $vector[$i]\n";
}

echo "<pre>";