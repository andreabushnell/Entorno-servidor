<?php
$provisional = array();
$minas = array();
$dimension = 5;
$nRand = rand(1, $dimension * $dimension);

for ($i = 0; $i < 10; $i++) {
    if (!in_array($nRand, $minas)) {
        $minas[$i] = $nRand;
    }
    while (in_array($nRand, $minas)) {
        if (!in_array($nRand, $minas)) {
            $minas[$i] = $nRand;
        } else {
            $nRand = rand(1, $dimension * $dimension);
        }
    }
}
sort($minas);
asort($minas);
echo "<pre>";
print_r($minas);
echo "<pre>";

for ($i = 0; $i < 25; $i++) {
    $provisional[$i] = 0;
    for ($j = 0; $j < 10; $j++) {
        if ($minas[$j] - 1 == $i) {
            $provisional[$i] = 1;
        }
    }
}
echo "<pre>";
print_r($provisional);
echo "<pre>";


$tablero = array();
for ($i = 0; $i < count($provisional); $i += $dimension) {
    $tablero[] = array_slice($provisional, $i, $dimension);
}
echo "<pre>";
print_r($tablero);
echo "<pre>";
