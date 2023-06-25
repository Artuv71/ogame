<?php

function getInfo( string $pseudo): array
{
    // Variable de connexion à la BDD
    global $mysqli;
    // Initialisation d'un tableau
    $arr = [];

    // Création d'une requête SQL
    $req = "SELECT * FROM users where pseudo='$pseudo'";

    // Connexion à la BDD --> Variable de connexion + requête
    $responses = mysqli_query($mysqli, $req);
    // Vérification de la réponse
    if($responses){
        // Boucle sur les lignes du tableau de la BDD
        while($info = mysqli_fetch_assoc($responses)){

            // Equivalent de array_push( $arr, $users);
            $arr = $info;
        }
    }
    // On retourne les données sous forme de tableau
    return $arr;
}

