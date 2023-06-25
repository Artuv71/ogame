<?php

require_once MODEL_PATH . 'game-model.php';

function buyIndex()
{

    $view_data = ['html_title' => 'Menu d\'achat'];

    loadView( 'buy', $view_data);
}