<?php

namespace App\ViewModels;

use App\ViewModels\IViewProductModel;

class ViewProductModel implements IViewProductModel
{
    private $_products; // array

    public function __construct(IProductService $productService)
    { }
    public function getAll()
    {
        $this_products = null;
    }

    public function getProduct()
    { }
}
