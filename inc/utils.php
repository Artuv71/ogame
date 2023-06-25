<?php
// Fonction d'affichage de données
function dd($arg){
    var_dump($arg);
    die;
}

// Echo une URL absolue à partir d'un chemin donné
function uri( string $path): void
{
    echo APP_ROOT . $path;
}

// Chargement d'une view
function loadView(string $name, array $data): void
{
    // Transforme les clés de $data en variable accèssibles à la view
    extract($data);

    //Chargement de la view demandée
    require_once PARTIALS_VIEW_PATH . 'header.php';
    require_once VIEW_PATH . $name . '.php';
    require_once PARTIALS_VIEW_PATH . 'footer.php';
}

// Vérification sécurité
function security( string $pseudo, string $password) : array
{

    $securities = [];

    // Process de sécurité
    // Vérification injection HTML
    $pseudo = htmlentities($pseudo);
    $password = htmlentities($password);

    // Vérification injection php
    $pseudo = strip_tags($pseudo);
    $password = strip_tags($password);

    // Sécurisation du password
    $password = SALT . $password . PEPPER;
    $password = hash('md5', $password);

    $securities['password'] = $password;
    $securities['pseudo'] = $pseudo;

    return $securities;
}

//Vérification de sécurité des tweets
function secutity_tweet( string $txt) : string
{
    // Process de sécurité
    // Vérification injection HTML
    $txt = htmlentities($txt);

    // Vérification injection php
    $txt = strip_tags($txt);

    return $txt;
}

// Vérification de la connexion d'un utilisateur
function isConnected(): bool { 
    return !isset($_SESSION['user']);
}

function disconnect(): void 
{
    session_destroy();
    header("Location: http://dev.projet_Ogame.com");
}