<?php
require_once __DIR__.'/../vendor/autoload.php';

use \App\App;
use \App\Controller\ProductController;
use \App\Model\ProductList;
use App\Router\Router;

error_reporting(E_ALL);
ini_set('display_errors', 1);

//$productCon = new ProductController();
//$productList = new ProductList();
//$productCon->productList($productList->productList);
$router = new Router($_SERVER['REQUEST_URI']);
$router->run();

echo '<pre>';
print_r($_SERVER['REQUEST_URI']);
echo '</pre>';


//$app = new App();
//$app->App();
//echo 'My site is the best things';
