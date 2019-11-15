<?php

namespace App\Repositories;

use App\Models\Product;

interface IProductRepository extends IRepository
{
    public function getLatestProducts();
}
