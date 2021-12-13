<?php

use \App\App;
use \App\Controller\ProductController;
use \App\Model\ProductList;
use App\Router\Router;

require_once __DIR__.'/../vendor/autoload.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);


$router = new Router($_SERVER['REQUEST_URI']);
$router->run();
