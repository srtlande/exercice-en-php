<?php


$date = date('d/m/y ');

echo "Nous sommes le  $date";

$heure = date('H : i');
echo " il est actuellement $heure";

if ($heure<13) {
    echo "je vous souhaite une bonne matinée!";
}else{
    echo "je vous souhaite une bonne après-midi";
}

