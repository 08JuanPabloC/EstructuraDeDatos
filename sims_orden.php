<?php

$habitantes = array("Andrés" => 23, "Lucía" => 21, "Mateo" => 15);
asort($habitantes); // Ordenar por edad (valores)

$habitantes2 = array("Andrés" => 23, "Lucía" => 21, "Mateo" => 15);
ksort($habitantes2); // Ordenar por nombre (claves)

// Mostrar resultados
print_r($habitantes);
print_r($habitantes2);

?>
