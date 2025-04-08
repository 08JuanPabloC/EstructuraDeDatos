<?php

// Crear lista enlazada simulada
$mazmorra1 = ["valor" => "Bosque", "siguiente" => null];
$mazmorra2 = ["valor" => "Montaña", "siguiente" => null];
$mazmorra3 = ["valor" => "Templo del Tiempo", "siguiente" => null];

// Enlazar nodos
$mazmorra1["siguiente"] = &$mazmorra2;
$mazmorra2["siguiente"] = &$mazmorra3;

// Recorrer lista
$actual = $mazmorra1;
while ($actual !== null) {
    echo "Entrando a: " . $actual["valor"] . "\n";
    $actual = $actual["siguiente"];
}

?>
