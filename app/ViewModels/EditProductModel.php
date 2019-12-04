<?php

namespace App\ViewModels;

use App\ViewModels\IEditProductModel;
use App\Services\IProductService;
use Illuminate\Http\Request;

class EditProductModel implements IEditProductModel
{
    private $_productService;
    private $_name;
    private $_SKU;
    private $_price;
    private $_discount;
    private $_category;
    private $_subCategory;
    private $_images;
    private $_id;

    public function __construct(IProductService $productService, Request $request)
    {
        $this->_productService = $productService;
        $this->_name = $request->input('name');
        $this->_SKU = $request->input('SKU');
        $this->_price = $request->input('price');
        $this->_discount = $request->input('discount');
        $this->_category = $request->input('category');
        $this->_subCategory = $request->input('sub_category');
        $this->_images = $request->input('images');
        $this->_id = $request->input('id');
    }

    public function updateProduct()
    {
        $product = resolve('App\BusinessObjects\Product');

        $product->setName($this->_name);
        $product->setSKU($this->_SKU);
        $product->setImages($this->_images);
        $product->setCategory($this->_category);
        $product->setSubCategory($this->_subCategory);
        $product->setPrice($this->_price);
        $product->setDiscount($this->_discount);
        $product->setID($this->_id);

        $this->_productService->updateProduct($product, $id);
    }

    public function showAProduct($id)
    {
        return $this->_productService->showAProduct($id);
    }

    public function getProduct($id)
    {
        return $this->_productService->getProduct($id);
    }
}
