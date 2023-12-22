<?php

$email = readline("saisir une adresse email:");

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "l'email $email est valide";
} else {
    echo " l'email $email est invalide";
}

