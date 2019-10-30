<?php

class DiscountFixed extends Discount
{
    private $amount;
    private $validUntill;

    public function getAmount()
    {
        return $this->amount;
    }
    public function setAmount()
    {
        //this will come from the source
    }
    public function getValidUntill()
    {
        return $this->validUntill;
    }
    public function setValidUntill()
    {
        //this will come from the source
    }
}
