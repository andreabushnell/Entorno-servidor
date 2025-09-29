<?php
function contar ($cadena, $caracter) {
    $c = 0;
    for ($i=0; $i<strlen($cadena); $i++) {
        if ($cadena[$i] == $caracter) {
            $c++;
        }
    }
    print "El caracter ".$caracter." aparece ".$c." veces en la cadena ".$cadena;
}

$cadena = strtolower(readline("Introduce una cadena: "));
$caracter  = strtolower(readline("Introduce el caracter a buscar: "));

contar ($cadena , $caracter );
