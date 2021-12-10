<?php
namespace App\Model;

class ProductList
{
    const FILE_PATH = 'product_list.txt';

    /**
     * @param $file
     * @param $content
     * @return mixed
     */
    public function getFile()
    {
        $productListJson = file_get_contents(self::FILE_PATH, true, null);
        $productList = json_decode($productListJson);

        return $productList;

//        echo '<pre>';
//        print_r($content);
//        echo '</pre>';
    }
//    public array $productList = [
//    'OnePlus'=> [
//    'Model'=>'9 Pro',
//    'CPU'=>'Qualcomm Snapdragon 888',
//    'screen'=>6.7,
//    'memory'=>'256GB',
//    'RAM'=>12,
//    'price'=>26999,
//    ],
//    'Samsung'=> [
//    'Model'=>'Galaxy Note 20',
//    'CPU'=>'Samsung Exynos 990',
//    'screen'=>6.7,
//    'memory'=>'256Gb',
//    'RAM'=>8,
//    'price'=>19999,
//    ],
//    'Apple'=> [
//    'Model'=>'iPhone 13',
//    'CPU'=>'Apple A15 Bionic',
//    'screen'=>6.1,
//    'memory'=>'128Gb',
//    'RAM'=>4,
//    'price'=>29999
//    ]];
}
