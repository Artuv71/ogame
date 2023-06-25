<?php

require_once MODEL_PATH . 'game-model.php';

function buildingsIndex()
{


    $view_data = [
        'html_title' => 'Menu de construction',
    ];

    loadView( 'buildings', $view_data);
}