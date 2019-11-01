<?php

class Cart
{
    private $session_id;
    private $coupon;
    private $cart_items = []; //array of cart items
    private $total_amount;

    // getters and setters
    public function setSessionId($session_id)
    {
        $this->session_id = $session_id;
    }
    public function getSessionId()
    {
        return $this->session_id;
    }
    public function setCoupon($coupon)
    {
        $this->coupon = $coupon;
    }
    public function getCoupon()
    {
        return $this->coupon;
    }
    public function setCartItems($cart_items)
    {
        $this->cart_items = $cart_items;
    }
    public function getCartItems()
    {
        return $this->cart_items;
    }
    public function setTotalAmount($total_amount)
    {
        $this->total_amount = $total_amount;
    }
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    public function applyCoupon($coupon)
    {
        //
    }

    public function addCartItem()
    {
        //
    }
}
