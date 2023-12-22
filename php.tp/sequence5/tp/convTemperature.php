<?php


require 'tp-fonctions.php';

$tempC = readline("saisissez une temperature en °C : ");

$fahrenheit = convertirCelsiusFahrenheit($tempC);

echo "$tempC °C équivaut à $fahrenheit °F ";
