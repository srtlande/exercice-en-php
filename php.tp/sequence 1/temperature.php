<?php
$temperatureCelcius = readline("saisir une temperature en celsius :");
$temperatureFahrenheit = $temperatureCelcius*9/5 + 32;
echo " la temperature en fahrenheit : $temperatureFahrenheit ° F";