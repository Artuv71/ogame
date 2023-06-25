<?php
require_once MODEL_PATH . 'user-model.php';

if(!empty($_POST['signup_pseudo']) && !empty($_POST['signup_password'])){

    $array_secu = security($_POST['signup_pseudo'], $_POST['signup_password']);

    $check_pseudo = getUser($array_secu['pseudo']);
    
    if(!empty($check_pseudo)){
        echo 'L\'utilisateur existe déjà !!';
    }
    else{
        $flag = insertUser( $array_secu['pseudo'] , $array_secu['password']);

        if($flag){
            echo 'Vous êtes inscrit !! :-)';
        }
        else{
            echo 'Erreur lors de votre inscription !!';
        }
    }
    
}

// Page d'inscription
function signupIndex()
{
    $view_data = ['html_title' => 'Inscription'];

    loadView( 'signup', $view_data);
}