<?php

function esPrimo($num){
    for ($i=2;$i<$num;$i++) {
        if ($num%$i==0) {
            return false;
        }
    }
    return true;
}

print esPrimo(5);
print esPrimo(15);
print esPrimo(17);