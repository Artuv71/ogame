<?php

require_once MODEL_PATH . 'game-model.php';

function défaiteIndex()
{

    $view_data = ['html_title' => 'défaite'];

    loadView( 'défaite', $view_data);
}