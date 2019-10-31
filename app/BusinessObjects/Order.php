<?php

namespace App\BusinessObjects\Order;

class Order
{
    private $order_number;
    private $order_status;
    private $product_id;
    private $product_quantity;
    //how to deal with multiple product?

    public function calculateAllUnitsForAProduct()
    {
        //if a product Quantity is more then one
    }
    public function calculateAllProducsPrice()
    {
        //all the products price
    }
    public function calculateVat()
    { }
    public function calculateTotalPrice()
    { }
}
