<?php

namespace App\Router;

use App\Controller\ProductController;
use App\Controller\SessionController;
use App\Model\ProductList;

class Router
{
    public string $controller;
    public string $action;
    private string $route;
    const HOME = '../../public/index.php';

    public function __construct(string $route)
    {
        $this->route=$route;
    }

        public function run(): void
        {
            switch ($this->route)
            {
                case '/':
                    $this->route = self::HOME;
                    break;

                case '/controller':
//                    $productList = new ProductList();
//                    print_r($productList->productList);
                    $productController = new ProductController();
                    $productController->productList();
//                    print_r();
                    break;

                case '/session':
                    echo "sessionController: <br />\n";
                    $sessionController = new SessionController();
                    $sessionController->start();
                    $sessionController->get();
                    break;

                default:
                    echo "404 Page is not found: <br />\n";
                    break;
            }
        }

}
