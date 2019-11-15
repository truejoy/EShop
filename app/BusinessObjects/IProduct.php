<?php

namespace App\BusinessObjects;

interface IProduct
{
    // getters and setters
    public function getName();
    public function setName($name);
    public function getSKU();
    public function setSKU($SKU);
    public function getImages();
    public function setImages($images);
    public function getCategory();
    public function setCategory($category);
    public function getSubCategory();
    public function setSubCategory($sub_category);
    public function getPrice();
    public function setPrice($price);
    public function getDiscount();
    public function setDiscount($discount);
    public function getIsAvailable();
    public function setIsAvailable($is_available);
}
