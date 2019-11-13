<?php

namespace App\ViewModels;

use Illuminate\Http\Request;

use App\Services\ProductService;

class CreateProductModel
{
    private $_productService;
    private $_product;

    public function __construct(ProductService $productService)
    {
        $this->_productService = $productService;
    }
    public function createProduct($request)
    {
        // $request_result = $request->input();

        // $data = array();

        // foreach ($request_result as $key => $value) {
        //     $data[$key] = $value;
        // }

        $this->_product = resolve('App\BusinessObjects\Product');

        $this->_product->setName($request->input('name'));
        $this->_product->setSKU($request->input('SKU'));
        $this->_product->setImages($request->input('images'));
        $this->_product->setCategory($request->input('category'));
        $this->_product->setSubCategory($request->input('sub_category'));
        $this->_product->setPrice($request->input('price'));
        $this->_product->setDiscount($request->input('discount'));

        $this->_productService->addProduct($this->_product);
    }
}
