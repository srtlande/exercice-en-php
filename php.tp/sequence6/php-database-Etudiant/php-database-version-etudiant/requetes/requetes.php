<?php

/********************************************************************
 * Ce fichier PHP contient la liste des fonctions permettant de
 * simuler les requêtes dans la base de données
 *******************************************************************/

/* Requête R1
 * Récupérer les articles actifs (articles à afficher)
 * On souhaite récupérer l'id, le titre, le contenu et la date de création de chaque article
*/
function rechercherArticlesActifs(array $tableArticle) : array {
    $resultats = [];
        foreach($tableArticle as $articles){
            if($articles["actif"]){
            ["titre"=>$titre,"contenu"=>$contenu,"date_creation"=> $date_creation]=$articles;
            echo array_push($resultats,$titre,$contenu,$date_creation);
        }
            echo $tableArticle["$articles"];
    }
    return  $resultats;


}

/* Requête R2
 * Récupérer les articles d'une catégorie donnée
 * On souhaite récupérer l'id, le titre, le contenu et la date de création de chaque article
*/



$idCategorie = readline("saisir le nom d'une catégorie pour avoir accès aux articles de celle-ci");
function ArticleParCategorie(array $tableArticle , $idCategorie , $tableCategorie) : array {
    $categorie = [ ];
    foreach($tableCategorie as $categorie)
        foreach($tableArticle as $ )
        if($idCategorie == $tableCategorie[0])





/* Requête R3
 * Récupérer l'ensemble des articles
 * On souhaite récupérer l'id, le titre, le contenu, la date de création et le nom de la catégorie de chaque article
*/


function toutLesArticlesAvecCategorie(array $articles, $categorie): array {
    $articleAvecCategorie = [];
    foreach($articles as $categorie => $article){
        $categorie = $categorie[$articles['id_cate']];
        $articleDetails= [
            'id'=>$id,
            'titre'=> $article['titre'],
            'contenu'=> $article["contenu"],
            'date_creation'=> $article ["article"],
            'nom'=> $categorie["libelle"],
        ] ;
        $articleAvecCategorie[] = $articleDetails;
    }
    return $articleAvecCategorie;
};

/* Requête R4
 * Récupérer les articles dont la date de création est supérieure à une date donnée
 * On souhaite récupérer l'id, le titre, le contenu, la date de création, le prénom et le nom de l'auteur de
 * chaque article
*/
// PLACER ICI VOTRE FONCTION


/* Requête R5
 * Récupérer les articles à afficher ordonnés sur le titre (ordre alphabétique)
 * On souhaite récupérer l'id, le titre, la date de création et le libellé de la catégorie de chaque article
*/
// PLACER ICI VOTRE FONCTION


/* Requête R6
 * Récupérer le nombre d'articles postés par un auteur donné (id_auteur)
*/
// PLACER ICI VOTRE FONCTION


/* Requête R7
 * Récupérer le nombre d'articles postés par chaque auteur
 * On souhaite récupérer l'id, le prénom, le nom et le nombre d'articles ce chaque auteur
*/
// PLACER ICI VOTRE FONCTION
