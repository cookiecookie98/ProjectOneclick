<?php

require_once('app/models/ProductModel.php');

class ProductController
{

    public static $products;

    public function __construct(){
        self::$products = new ProductModel();
    }

    public static function getAll(){
        return self::$products::getProduct();
    }

    public static function addProduct($products){
        var_dump($products);
        self::$products::addProduct($products);
    }

    public static function updateProduct($productId,$products){
        self::$products::updateProduct($productId,$products);
    }

    public static function deleteProduct($id){
        self::$products::deleteProduct($id);
    }
}
