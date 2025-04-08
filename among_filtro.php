<?php

$tripulacion = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);

// Filtrar posibles tripulantes (ID <= 5)
$tripulantes = array_filter($tripulacion, function ($id): bool {
    return $id <= 5;
});

// Filtrar posibles impostores (ID >= 5)
$impostores = array_filter($tripulacion, function ($id): bool {
    return $id >= 5;
});

print_r($tripulantes);
print_r($impostores);

?>
