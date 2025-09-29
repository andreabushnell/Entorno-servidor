<?php

$usuario = readline ("Introduce tu usuario: ");
if (ctype_alnum($usuario)) {
    print ("Nombre de usuario válido. El login será ".strtolower($usuario));
} else {
    print "El nombre de usuario sólo puede contener números y letras sin espacios en blanco.";
}