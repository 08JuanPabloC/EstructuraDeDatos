<?php

echo "Super Mario - Gestión de Niveles\n";

$niveles = array("Bosque", "Castillo", "Volcán", "Desierto", "Océano");
$niveles[] = "Cielo"; // Se agrega un nuevo nivel

print_r($niveles);

// Reiniciamos niveles y eliminamos uno
$niveles = ["Bosque", "Castillo", "Volcán", "Desierto", "Océano"];
unset($niveles[3]);
print_r($niveles);

// Eliminación por nombre
$nivelEliminar = "Desierto";
$llave = array_search($nivelEliminar, $niveles);

if ($llave !== false) {
    unset($niveles[$llave]);
}

print_r($niveles);

// Reemplazo de niveles
$niveles[0] = "Bosque";
print_r($niveles);

$niveles[2] = "Mazmorra";
print_r($niveles);

?>
