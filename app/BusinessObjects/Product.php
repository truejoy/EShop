<?php

namespace App\BusinessObjects;

class Product implements IProduct
{
    private $name;
    private $SKU;
    private $images = [];
    private $category;
    private $sub_category;
    private $price;
    private $discount; //discount class er object
    // private $is_available; //In-stock

    public function __construct()
    { }

    // getters and setters
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getSKU()
    {
        return $this->SKU;
    }
    public function setSKU($SKU)
    {
        $this->SKU = $SKU;
    }
    public function getImages()
    {
        return $this->images;
    }
    public function setImages($images)
    {
        $this->images = $images;
    }
    public function getCategory()
    {
        return $this->category;
    }
    public function setCategory($category)
    {
        $this->category = $category;
    }
    public function getSubCategory()
    {
        return $this->sub_category;
    }
    public function setSubCategory($sub_category)
    {
        $this->sub_category = $sub_category;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getDiscount()
    {
        return $this->discount;
    }
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
    public function getIsAvailable()
    {
        return $this->is_available;
    }
    public function setIsAvailable($is_available)
    {
        $this->is_available = $is_available;
    }
}
