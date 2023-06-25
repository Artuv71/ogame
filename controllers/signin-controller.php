<?php
require_once MODEL_PATH . 'user-model.php';

if(!empty($_POST['signin_pseudo']) && !empty($_POST['signin_password'])){

    $array_secu = security($_POST['signin_pseudo'], $_POST['signin_password']);
    $check_user = getAllUser($array_secu['pseudo']);
    
    if(!empty($check_user)){
        
        if($check_user['password'] === $array_secu['password']){
            
            $_SESSION['user'] = $check_user; // Enregistrement de l'utilisateur dans la variable $_SESSION
            header("Location: http://dev.projet_Ogame.com/HomeIG"); // Redirection vers la page d'administration

        }
        else{
            echo 'Mot de passe incorrect !!';
        }
    }
    else{
        echo 'L\'utilisateur n\'existe pas !!';
    }
    
}

// Page de connexion
function signinIndex()
{
    $view_data = ['html_title' => 'Connexion'];

    loadView( 'signin', $view_data);
}