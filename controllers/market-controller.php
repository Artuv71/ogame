<?php

require_once MODEL_PATH . 'game-model.php';

function marketIndex()
{

    $view_data = ['html_title' => 'Menu d\'échanges'];

    loadView( 'market', $view_data);
}