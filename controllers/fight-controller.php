<?php

require_once MODEL_PATH . 'game-model.php';

function fightIndex()
{

    $view_data = ['html_title' => 'Menu de combat'];

    loadView( 'fight', $view_data);
}