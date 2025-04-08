<?php

$perfilBasico = array("nombre" => "Franklin", "edad" => 25, "correo" => "franklin@gta.com");
$perfilExtra = array("ciudad" => "Los Santos", "profesion" => "Conductor");

$perfilCompleto = array_merge($perfilBasico, $perfilExtra);

print_r($perfilCompleto);

?>
