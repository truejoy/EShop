<?php

namespace App\Repositories;

use App\Repositories\Repository;

use App\Models\Product;

use App\BusinessObjects\Product as BProduct;

class ProductRepository extends Repository implements IProductRepository
{
    public function __construct()
    {
        parent::__construct(new Product());
    }
    public function readAll()
    {
        //
        return parent::readAll();
    }
    public function createProduct(BProduct $product)
    {
        $data = [];

        $data['name'] = $product->getName();
        $data['SKU'] = $product->getSKU();
        $data['images'] = $product->getImages();
        $data['category'] = $product->getCategory();
        $data['sub_category'] = $product->getSubCategory();
        $data['price'] = $product->getPrice();
        $data['discount'] = $product->getDiscount();

        parent::create($data);
    }
    public function read($id)
    {
        //
        return parent::read($id);
    }

    public function updateProduct(BProduct $product, $id)
    {
        $data = [];

        $data['name'] = $product->getName();
        $data['SKU'] = $product->getSKU();
        $data['images'] = $product->getImages();
        $data['category'] = $product->getCategory();
        $data['sub_category'] = $product->getSubCategory();
        $data['price'] = $product->getPrice();
        $data['discount'] = $product->getDiscount();

        parent::update($data, $id);
    }
    public function deleteProduct($id)
    {
        //
        return parent::delete($id);
    }

    public function getLatestProducts()
    {
        //
    }
}
