<?php

namespace App\Services;

use App\Repositories\IProductRepository;

use App\Services\IProductService;

use App\BusinessObjects\Product as BProduct;

class ProductService implements IProductService
{
    private $_productRepository;

    public function __construct(IProductRepository $productRepository)
    {
        $this->_productRepository = $productRepository;
    }

    public function addProduct(BProduct $bProduct)
    {
        $this->_productRepository->createProduct($bProduct);
    }
}
