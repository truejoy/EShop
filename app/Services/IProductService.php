<?php

namespace App\Services;

use App\BusinessObjects\Product as BProduct;

interface IProductService
{
    public function showAllProducts();
    public function addProduct(BProduct $bProduct);
    public function showAProduct($id);
    public function updateProduct(BProduct $bProduct, $id);
    public function deleteProduct($id);
    public function getProduct($id);
}
