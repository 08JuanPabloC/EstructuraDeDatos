<?php

$nodo1 = ["valor" => "Pradera", "siguiente" => null];
$nodo2 = ["valor" => "Montaña", "siguiente" => null];
$nodo1["siguiente"] = &$nodo2;

// Nuevo nodo
$nodo3 = ["valor" => "Cueva", "siguiente" => null];

// Recorrer hasta el final
$actual = &$nodo1;
while ($actual["siguiente"] !== null) {
    $actual = &$actual["siguiente"];
}

// Agregar nuevo nodo
$actual["siguiente"] = &$nodo3;

// Recorrer lista completa
$actual = $nodo1;
while ($actual !== null) {
    echo "Explorando: " . $actual["valor"] . "\n";
    $actual = $actual["siguiente"];
}

?>
