<?php

$bmw = [
    "model" => "X5",
    "speed" => 120, 
    "doors" => 5,
    "year" => "2015"
];

$toyota = [
    "model" => "Camry",
    "speed" => 200,
    "doors" => 3,
    "year" => "2010"
];

$opel = [
    "model" => "Astra",
    "speed" => 100,
    "doors" => 3,
    "year" => "2007"
];

$cars = [];

array_push($cars, $bmw, $toyota, $opel);

echo "<pre>";
print_r($cars);
echo "</pre>";

echo "Car bmw <br>" . $cars[0]['model'] . " " . $cars[0]['speed'] . " " . $cars[0]['doors'] . " " . $cars[0]['year'] . "<br>" . "<br>";
echo "Car toyota <br>" . $cars[1]['model'] . " " . $cars[1]['speed'] . " " . $cars[1]['doors'] . " " . $cars[1]['year'] . "<br>" . "<br>";
echo "Car opel <br>" . $cars[1]['model'] . " " . $cars[1]['speed'] . " " . $cars[1]['doors'] . " " . $cars[1]['year'];