<?php
//use BusinessObjects\Discount;
class Product implements productInterface
{
    private $name;
    private $sku;
    private $image;
    private $category;
    private $sub_category;
    private $price;
    private Discount $discount;
    //private $is_available; //In-stock
    //private $expiary_date;
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
