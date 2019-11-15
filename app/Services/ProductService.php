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
    public function showAll()
    {
        return $this->_productRepository->readAll();
    }
    public function show($id)
    {
        return $this->_productRepository->read($id);
    }
    public function addProduct(BProduct $bProduct)
    {
        $this->_productRepository->createProduct($bProduct);
    }
    public function updateProduct(BProduct $bProduct, $id)
    {
        $this->_productRepository->updateProduct($bProduct, $id);
    }
    public function deleteProduct($id)
    {
        return $this->_productRepository->deleteProduct($id);
    }
}
