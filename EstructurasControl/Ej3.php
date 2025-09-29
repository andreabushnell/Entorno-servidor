<?php

$numero = readline("Introducir número entre 1 y 100: ");

if ($numero>=1 && $numero<=100){
    for ($i=0;$i<$numero;$i++) {
        for ($j=0; $j<=$i; $j++) {
            echo "* ";
        }
        echo "\n";
    }
} else {
echo "El número tiene que estar comprendido entre 1 y 100";

}