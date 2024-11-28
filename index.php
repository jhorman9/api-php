<?php

require_once "controllers/routes.controller.php";
require_once "controllers/courses.controller.php";
require_once "controllers/client.controller.php";

$routes = new ControllersRoutes();
$routes->inicio();

?>