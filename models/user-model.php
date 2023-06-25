<?php 

// Fonction de récupération d'un utilisateur
function getUser(string $pseudo): array
{
    // Variable de connexion à la BDD
    global $mysqli;
    // Initialisation d'un tableau
    $arr = [];

    // Création d'une requête SQL
    $req = "SELECT pseudo FROM users where pseudo='$pseudo'";

    // Connexion à la BDD --> Variable de connexion + requête
    $responses = mysqli_query($mysqli, $req);

    // Vérification de la réponse
    if($responses){
        // Boucle sur les lignes du tableau de la BDD
        while($user = mysqli_fetch_assoc($responses)){

            // Equivalent de array_push( $arr, $users);
            $arr = $user;
        }
    }

    // On retourne les données sous forme de tableau
    return $arr;
}

// Fonction de récupération des données d'un utilisateur
function getAllUser(string $pseudo): array
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
        while($user = mysqli_fetch_assoc($responses)){

            // Equivalent de array_push( $arr, $users);
            $arr = $user;
        }
    }

    // On retourne les données sous forme de tableau
    return $arr;
}

// Fonction qui ajoute un utilisateur dans la base de données
function insertUser(string $pseudo, string $password): bool
{
    global $mysqli;
    $req = "INSERT INTO users (pseudo, password) 
        VALUES ('$pseudo', '$password')";
    
    if(mysqli_query($mysqli, $req)){
        
        return true;
    }
    else{
        return false;
    }
}