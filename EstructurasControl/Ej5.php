<?php

$filas = 10;

for ($i=0; $i<$filas; $i++) {
        $espacios = $filas-$i;
        for ($x=0; $x<$espacios; $x++){
            echo "  ";
        }
        $asteriscos = ($i*2)-1;
        for ($y=0; $y<$asteriscos; $y++) {
            echo "* ";
        }
        echo "\n";
} 
