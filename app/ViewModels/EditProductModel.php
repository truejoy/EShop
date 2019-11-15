<?php

namespace App\ViewModels;

use App\ViewModels\IEditProductModel;
use App\Services\IProductService;

class EditProductModel implements IEditProductModel
{
    //
    private $_productService;

    public function __construct(IProductService $productService)
    {
        $this->_productService = $productService;
    }
    public function updateProduct($request, $id)
    {
        $product = resolve('App\BusinessObjects\Product');

        $product->setName($request->input('name'));
        $product->setSKU($request->input('SKU'));
        $product->setImages($request->input('images'));
        $product->setCategory($request->input('category'));
        $product->setSubCategory($request->input('sub_category'));
        $product->setPrice($request->input('price'));
        $product->setDiscount($request->input('discount'));

        $this->_productService->updateProduct($product, $id);
    }
}
