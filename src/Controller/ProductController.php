<?php

namespace App\Controller;
class ProductController
{
    public $productList = [];

    public function productList(array $productList)
    {
        foreach ($productList as $key=>$item) {
            echo "{$key} <br>";
            foreach ($item as $key1=>$item1) {
                echo "<pre>{$key1} => {$item1}.<br>";
            }
        }
    }
}
