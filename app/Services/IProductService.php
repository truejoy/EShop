<?php

namespace App\Services;

use App\BusinessObjects\Product as BProduct;

interface IProductService
{
    public function addProduct(BProduct $bProduct);
}
