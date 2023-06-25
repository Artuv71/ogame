<?php

require_once MODEL_PATH . 'game-model.php';

function armyIndex()
{

    $view_data = ['html_title' => 'Menu des armées'];

    loadView( 'army', $view_data);
}