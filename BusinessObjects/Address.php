<?php

class Address
{
    private $house_no;
    private $flat_no;
    private $floor;
    private $zip;
    private $street;
    private $state;
    private $city;
    private $country;

    public function formattedFullAddress()
    {
        //
        return "$this->house_no, $this->flat_no, $this->floor, $this->zip";
    }
}
