<?php

class DiscountPercentage extends Discount
{
    private $getPercantage;
    private $validUntill;
    private $currentDate;

    public function getPercantage()
    {
        return $this->getPercantage;
    }
    public function setPercantage()
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
    public function getCurrentDate()
    {
        return $this->validUntill;
    }
    public function setCurrentDate()
    {
        //this will come from the source
    }

    public function calculate()
    {
        //this will calculate discount percantage
        if ($this->validUntill < $this->currentDate) {
            //apply the discount
        }
    }
}
