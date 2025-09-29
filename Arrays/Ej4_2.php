<?php

//diagonal 1s, resto 0s
/*
 * 0 0 0 1
 * 0 0 1 0
 * 0 1 0 0
 * 1 0 0 0
 */

$cuadrado = array();
$dimension = 10;
//Diagonal empezando por la derecha
for ($i = 0; $i < $dimension; $i++) {
    for ($j = 0; $j < $dimension; $j++) {
        if ($j == ($dimension - $i - 1)) {
            $cuadrado[$i][$j] = 1;
        } else {
            $cuadrado[$i][$j] = 0;
        }
    }
}

//Diagonal empezando por la izquierda
for ($i = 0; $i < $dimension; $i++) {
    for ($j = 0; $j < $dimension; $j++) {
        if ($j == ($dimension + $i - $dimension)) {
            $cuadrado[$i][$j] = 1;
        } else {
            $cuadrado[$i][$j] = 0;
        }
    }
}

echo "<pre>";
print_r($cuadrado);
echo "<pre>";

