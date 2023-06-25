<?php

// Page d'erreur
function error404Index()
{

    $view_data = ['html_title' => 'Page introuvable'];

    loadView( 'error-404', $view_data);
}