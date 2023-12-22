<?php

$notes = [10,12.5,14,7,15,9.5,8 ];

$meilleurNote = $notes [0];


foreach($notes as $note){
    if($note > $meilleurNote){
        $meilleurNote = $note;
    }
}

echo "la meilleur note est $meilleurNote";