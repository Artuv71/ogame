<?php 
session_start();  // Initialisation de la variable $_SESSION

define( 'DS', DIRECTORY_SEPARATOR );
define( 'APP_PATH', dirname(__FILE__) . DS );
define( 'CONTROLLER_PATH', dirname(__FILE__) . DS . 'controllers' . DS );
define( 'MODEL_PATH', dirname(__FILE__) . DS . 'models' . DS );
define( 'VIEW_PATH', dirname(__FILE__) . DS . 'views' . DS );
define( 'PARTIALS_VIEW_PATH', dirname(__FILE__) . DS . 'views' . DS . 'partials' . DS );
define( 'INC_PATH', dirname(__FILE__) . DS . 'inc' . DS);

define( 'APP_ROOT', 'http://dev.projet_Ogame.com/');
define( 'APP_NAME', 'ogame');

require_once INC_PATH . 'database.php';
require_once INC_PATH . 'utils.php';

require_once CONTROLLER_PATH . 'home-controller.php';
require_once CONTROLLER_PATH . 'signin-controller.php';
require_once CONTROLLER_PATH . 'signup-controller.php';
require_once CONTROLLER_PATH . 'error-404-controller.php';
require_once CONTROLLER_PATH . 'HomeIG-controller.php';
require_once CONTROLLER_PATH . 'buildings-controller.php';
require_once CONTROLLER_PATH . 'army-controller.php';
require_once CONTROLLER_PATH . 'market-controller.php';
require_once CONTROLLER_PATH . 'fight-controller.php';
require_once CONTROLLER_PATH . 'buy-controller.php';
require_once CONTROLLER_PATH . 'sell-controller.php';
require_once CONTROLLER_PATH . 'victoire-controller.php';
require_once CONTROLLER_PATH . 'défaite-controller.php';

require_once INC_PATH . 'router.php';

mysqli_close( $mysqli );