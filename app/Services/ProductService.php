<?php

namespace App\Services;

use App\Repositories\IProductRepository;

use App\BusinessObjects\Product;

class ProductService
{
    private $_productRepository;

    public function __construct(IProductRepository $productRepository)
    {
        $this->_productRepository = $productRepository;
    }

    public function addProduct(Product $product)
    {
        $this->_productRepository->createProduct($product);
    }
}
