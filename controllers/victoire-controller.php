<?php

require_once MODEL_PATH . 'game-model.php';

function victoireIndex()
{

    $view_data = ['html_title' => 'victoire'];

    loadView( 'victoire', $view_data);
}