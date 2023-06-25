<?php

require_once MODEL_PATH . 'game-model.php';

function HomeIGIndex()
{

    $view_data = ['html_title' => 'accueil'];

    loadView( 'HomeIG', $view_data);
}