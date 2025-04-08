<?php

$bloques = array();

array_push($bloques, "Bloque 0");
array_push($bloques, "Bloque 1");
array_push($bloques, "Bloque 2");
array_push($bloques, "Bloque 3");
array_push($bloques, "Bloque 4");
array_push($bloques, "Bloque 5");
array_push($bloques, "Bloque 6");
array_push($bloques, "Bloque 7");
array_push($bloques, "Bloque 8");
array_push($bloques, "Bloque 9");

$ultimoBloque = array_pop($bloques);

echo "El último bloque agregado fue: " . $ultimoBloque;

?>
