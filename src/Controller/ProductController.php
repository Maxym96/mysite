<?php

namespace App\Controller;
use App\Model\ProductList;
use App\Services\ISession;

class ProductController extends ProductList
{

//    public function __construct(array $productList)
//    {
//        $this->$productList = $productList;
//    }

    public function productList(): void
    {
        foreach ($this->getFile() as $key=>$item) {
            echo "{$key} <br>";
            foreach ($item as $key1=>$item1) {
                echo "<pre>{$key1} => {$item1}.<br>";
            }
        }
    }
}
