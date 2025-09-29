<?php

$numero = 5;

for ($i=$numero; $i>0; $i--) {
    for ($j=1; $j<=$i; $j++) {
        echo $j;
    }
    echo "\n";
}