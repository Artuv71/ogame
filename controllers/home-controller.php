<?php
require_once MODEL_PATH . 'home-model.php';

// Page d'accueil
function homeIndex()
{   
    $view_data = [
        'html_title' => 'Bienvenue',
    ];

    loadView( 'home', $view_data);
}