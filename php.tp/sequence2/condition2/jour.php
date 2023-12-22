<?php

$date =date();

if($date == 'samedi'){
    echo " aujourd'hui nous sommes le $date ,  je vous souhaite un Bon week-end";
}elseif( $date == 'dimanche'){
    echo " aujourd 'hui nous sommes le $date , je vous souhaite un bon dimanche";
}else {
    echo " aujourd'hui nous sommes le $date , je vous souhaite une bonne journée";
}