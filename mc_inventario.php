<?php

echo "Minecraft - Inventario\n";

$bloques = array("Piedra", "Tierra", "Madera", "Arena", "Ladrillo");
$bloques[] = "Diamante";

print_r($bloques);

// Reiniciar inventario y eliminar un bloque
$bloques = ["Piedra", "Tierra", "Madera", "Arena", "Ladrillo"];
unset($bloques[3]);
print_r($bloques);

// Eliminar bloque por nombre
$bloqueEliminar = "Arena";
$llave = array_search($bloqueEliminar, $bloques);

if ($llave !== false) {
    unset($bloques[$llave]);
}

print_r($bloques);

// Reemplazar bloques
$bloques[0] = "Piedra";
print_r($bloques);

$bloques[2] = "Obsidiana";
print_r($bloques);

// Selección de los primeros dos bloques
$bloquesSeleccionados = array_slice($bloques, 0, 2);
print_r($bloquesSeleccionados);

?>
