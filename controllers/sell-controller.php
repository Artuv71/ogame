<?php

require_once MODEL_PATH . 'game-model.php';

function sellIndex()
{

    $view_data = ['html_title' => 'Menu de vente'];

    loadView( 'sell', $view_data);
}