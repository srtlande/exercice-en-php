<?php

$notes = [20,20,16,7,20,19,8];
$somme = array_sum($notes);
$moyenne = $somme / count($notes);
echo round($moyenne,1);