<?php

// Nodos
$nodo1 = ["valor" => "Zona 1", "siguiente" => null];
$nodo2 = ["valor" => "Zona 2", "siguiente" => null];
$nodo3 = ["valor" => "Zona 3", "siguiente" => null];

// Enlazamos
$nodo1["siguiente"] = &$nodo2;
$nodo2["siguiente"] = &$nodo3;

// Eliminar nodo2 (Zona 2)
$nodo1["siguiente"] = &$nodo3;

// Recorrer
$actual = $nodo1;
while ($actual !== null) {
    echo "Visitando: " . $actual["valor"] . "\n";
    $actual = $actual["siguiente"];
}

?>
