<?php

echo "Fortnite - Eliminación\n";

$jugadores = ["Jonesy", "Peely", "Raven", "Midas", "Drift"];
unset($jugadores[2]); // Eliminamos a "Raven"
print_r($jugadores);

?>
