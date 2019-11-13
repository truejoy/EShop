<?php

use App\BusinessObjects\Product as BProduct;

interface IProductService
{
    public function addProduct(BProduct $bProduct);
}
