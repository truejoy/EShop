<?php

namespace App\ViewModels;

use App\Services\IProductService;

use App\ViewModels\ICreateProductModel;

class CreateProductModel implements ICreateProductModel
{
    private $_productService;

    public function __construct(IProductService $productService)
    {
        $this->_productService = $productService;
    }
    public function createProduct($request)
    {
        $product = resolve('App\BusinessObjects\Product');

        $product->setName($request->input('name'));
        $product->setSKU($request->input('SKU'));
        $product->setImages($request->input('images'));
        $product->setCategory($request->input('category'));
        $product->setSubCategory($request->input('sub_category'));
        $product->setPrice($request->input('price'));
        $product->setDiscount($request->input('discount'));

        $this->_productService->addProduct($product);
    }
}
