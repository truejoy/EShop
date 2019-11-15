<?php

namespace App\Services;

use App\BusinessObjects\Product as BProduct;

interface IProductService
{
    public function showAll();
    public function addProduct(BProduct $bProduct);
    public function show($id);
    public function updateProduct(BProduct $bProduct, $id);
    public function deleteProduct($id);
}
