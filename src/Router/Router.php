<?php

namespace App\Router;

use App\Controller\ProductController;
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
                    echo "<b>Пользовательское ПРЕДУПРЕЖДЕНИЕ</b><br />\n";
//                    $productList = new ProductList();
//                    print_r($productList->productList);
                    $productController = new ProductController();
                    $productController->productList();
//                    print_r();
                    break;

                case '/2':
                    echo "<b>Пользовательское УВЕДОМЛЕНИЕ</b><br />\n";
                    break;

                default:
                    echo "404 Page is not found: <br />\n";
                    break;
            }
        }

}
