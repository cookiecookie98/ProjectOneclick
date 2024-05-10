<?php

class ProductModel{
    public static $conn;

    public function __construct(){
        self::$conn = connect();
    }

    public static function getProduct(){
        $sql = "SELECT * FROM sanpham INNER JOIN thuonghieu ON `sanpham`.`idthuonghieu` = `thuonghieu`.`id`" ;
        $result = self::$conn->prepare($sql);
        $result->execute();
        $data = $result->fetch(PDO::FETCH_ASSOC);
        return $result->fetchAll();
    }

    public static function getProductById(){
        $sql = "SELECT * FROM product WHERE id = $id";
        $result = self::$conn->prepare($sql);
        $result->execute();
        $data = $result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public static function addProduct($product){
        $brandId = $product["idthuonghieu"];
        $sql = "INSERT INTO sanpham (id, tensanpham,idloaisanppham,idthuonghieu, gia,mota, hinhanh) VALUES (NULL, '".$product["tensanpham"]."',1,$brandId, '".$product["gia"]."', '".$product["mota"]."', '".$product["hinhanh"]."')";
        $result = self::$conn->prepare($sql);
        $result->execute();
    }

    public static function updateProduct($id, $product){
        $brandId = $product["idthuonghieu"];
        $sql = "UPDATE sanpham SET tensanpham = '".$product["tensanpham"]."',idloaisanppham = 1, idthuonghieu = $brandId,  gia = '".$product["gia"]."', mota = '".$product["mota"]."', hinhanh = '".$product["hinhanh"]."',   WHERE id = $id";
        $result = self::$conn->prepare($sql);
        $result->execute();
    }

    public static function deleteProduct($id){
        $sql = "DELETE FROM sanpham WHERE id = $id";
        $result = self::$conn->prepare($sql);
        $result->execute();
    }

}