<?php

use \App\App;
use \App\Controller\ProductController;

error_reporting(E_ALL);
ini_set('display_errors', 1);

$product = new ProductController();
$app = new App();
$app->App();
echo 'My site is the best things';
