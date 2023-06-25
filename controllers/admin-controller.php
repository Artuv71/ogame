<?php 
require_once MODEL_PATH . 'admin-model.php';

// Page d'administration
function adminIndex()
{     
    // Envoie des données sur la vue.
    $view_data = [
        'html_title' => 'Administration',
    ];

    loadView( 'Admin', $view_data);
}

