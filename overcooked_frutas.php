<?php

$despensa = array();

array_push($despensa, "Tomate");
array_push($despensa, "Lechuga");
array_push($despensa, "Cebolla");
array_push($despensa, "Queso");
array_push($despensa, "Pan");
array_push($despensa, "Pepinillos");
array_push($despensa, "Carne");

$ingredienteDelDia = array_shift($despensa);

echo "El ingrediente que toca usar hoy es: " . $ingredienteDelDia;

?>
