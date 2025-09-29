<?php

function getUsuario ($correo) {
    $indice = strpos($correo, '@');
    return substr($correo, 0, $indice);
}

$resultado = getUsuario(readline("Introduce tu correo: "));
print "\n".$resultado;