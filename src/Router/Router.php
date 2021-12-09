<?php

namespace App\Router;

use GuzzleHttp\Exception\BadResponseException;

class Router
{
    public string $controller;
    public string $action;
    private string $route;
    const HOME = '../../public/index.php';

    public function __construct($route)
    {
        $this->route=$route;
    }

        public function run(): void
        {
            switch ($this->route)
            {
                case '/':
                    echo 1111;
                    $this->route = self::HOME;
                    break;

                case '/controller':
                    echo "<b>Пользовательское ПРЕДУПРЕЖДЕНИЕ</b><br />\n";
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
