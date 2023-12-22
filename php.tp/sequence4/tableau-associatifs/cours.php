<?php
// declarer et initialiser un tableau de notes
// les clés = nom de l'étudiant et valeur = notes
$notes = [
     "dupond" => 12,
   "martin" => 16,
    "durand"=> 7,
    "JEAN" => 10

];

print_r($notes);

echo PHP_EOL;

// ajt une nouvelle note pour l'étudiant petit


$note [ "petit"] = 14;
print_r($notes);
$note ["petit"] = 12;
print_r($notes); // si la clé existe déjà, elle est remplacer par la nouvelle valeur (si on veut modifier la note de l'étudiant petit)

// afficher l'ensemble des notes

foreach($notes as $note){
    echo "$note ," ;
}
echo PHP_EOL;

// afficher le nom de chaque étudiant avec sa note

foreach($notes as $nom=>$note){
    $nom = ucfirst(strtolower($nom));
    echo " $nom: $note ";
}
echo PHP_EOL ;


// afficher le nom de chaque étudiant


foreach(array_keys($notes) as $nom){
    $nom = ucfirst(strtolower($nom));
    echo"$nom ";
}
echo PHP_EOL ;

// supp l'élément dont la clé est JEAN

unset($notes["JEAN"]); // respecter la casse

print_r($notes);

echo PHP_EOL ;


// calculer et afficher la moyenne des notes
// version 1 :
if (count($notes) > 0 ){


    $somme = 0;
    foreach ($notes as $note) {
        $somme += $note;
    }
    $moyenne = $somme / count($notes);
    echo round($moyenne,2);
}

echo PHP_EOL;

// version 2 :
if(!empty($notes)) {// teste si le tableau n'est pas vide pour pouvoir faire la moyenne
    $moyenne = array_sum($notes) / count($notes);
    echo round($moyenne,2);
}

// afficher la liste des étudiants triés par ordre alphabétique

$noms = array_keys($notes) ;
sort($noms); // trie les valeurs d'un tableau indexée // rsort() inverse les valeurs en décroissant


print_r($noms);



// rechercher et afficher la meilleure note

$noteMax = max($notes);
echo $noteMax;

// rechercher la liste des étudiants ayant une note > 10 + afficher un message spécifique si la liste est vide
$noms = [ ];
foreach ( $notes as $nom => $note) {
    if ($note < 10) ;
    {
        $noms = [$nom];
    }
}

if (empty($noms)){
    echo " la list est vide ";
}else {
    sort($noms);
    foreach($noms as $nom){
        echo $nom.PHP_EOL;
    }
}


