<?php

header("X-NombreProfe: Andy");
header('Content-Type: Application/json');

$data = ["datosTarjeta" => [
    "frente" => "ANDRES MARI VAZQUEZ",
    "numero" => "4546-3513-1545-1111",
    "cvv" => "165"
]];

$json = json_encode($data);

echo "$json".PHP_EOL;

?>