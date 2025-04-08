<?php

$reclutas = array("Ramírez" => 23, "Sofía" => 21, "Nico" => 15, "Bravo" => 18, "Ghost" => 15);
asort($reclutas); // Ordenar por edad

print_r($reclutas);

// Filtrar solo mayores de edad (mayores de 18)
$reclutasAprobados = array_filter($reclutas, function($edad): bool {
    return $edad > 18;
});

print_r($reclutasAprobados);

?>
