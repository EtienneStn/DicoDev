<?php
require_once "../config/dev.php";
require_once "../config/Autoloader.php";
require_once "../templates/general/header.php";
require_once "../templates/general/sidebar.php";
use App\config\Autoloader;
Autoloader::register();

use App\config\Router;
$router = new Router();
$router->run();

require_once "../templates/general/footer.php";
