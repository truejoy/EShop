<?php

include "./ProductInterface.php";

class Product implements productInterface
{
    private $name;
    private $model_number;
    private $image;
    private $brand;
    private $category;
    private $sub_category;
    private $size;
    private $color;
    private $is_available; //In-stock
    private $expiary_date;
    //private $product_type_id;

    public function displayAllProducts()
    { }
    public function showProductDetails()
    { }
    public function createProduct()
    { }
    public function updateProduct()
    { }
    public function deleteProduct()
    { }
}
