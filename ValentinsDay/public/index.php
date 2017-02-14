<?php
use app\components\Router;

ini_set('display_errors', 1);
error_reporting(E_ALL);

require '../vendor/autoload.php';

$router = new Router();
$router->run();