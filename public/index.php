<?php
require_once __DIR__.'/../vendor/autoload.php';

use \App\App;
use \App\Controller\ProductController;
use \App\Model\ProductList;

error_reporting(E_ALL);
ini_set('display_errors', 1);

//$productCon = new ProductController();
//$productList = new ProductList();
//$productCon->productList($productList->productList);

$app = new App();
$app->App();
echo 'My site is the best things';
