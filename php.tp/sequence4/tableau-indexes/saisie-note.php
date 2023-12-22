<?php

$notes = [];
$noteSaisie ='';


while($noteSaisie === 'q'){

    $noteSaisie = readline("veuillez saisir une note entre 0 et 20 :");

    if ($noteSaisie === 'q'){
        if  ( $noteSaisie>= 0 && $noteSaisie <= 20 ){
            $note[] = $noteSaisie;
        }else{
            echo " note invalide . veuillez entrer une note entre 0 et 20 .";
        }
    }

}
print_r($notes);



