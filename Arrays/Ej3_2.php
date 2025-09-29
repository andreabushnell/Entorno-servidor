<?php

$boleto = array();

$boleto[6] = rand(0, 9);
$num = rand(1, 49);

for ($i = 0; $i < 6; $i++) {
    if (!in_array($num, $boleto)) {
            $boleto[$i] = $num;
        }
    while (in_array($num, $boleto)) {
        if (!in_array($num, $boleto)) {
            $boleto[$i] = $num;
        } else {
            $num = rand(1, 49);
        }
    }
}
echo "<pre>";

printf("Números: %d %d %d %d %d %d\n<br>Complementario: %d", $boleto[0], $boleto[1], $boleto[2], $boleto[3], $boleto[4], $boleto[5], $boleto[6]);

echo "<pre>";
