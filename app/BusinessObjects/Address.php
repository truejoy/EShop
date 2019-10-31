<?php

namespace App\BusinessObjects\Address;

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

    public function getHouseNo()
    {
        return $$this->house_no;
    }
    public function setHouseNo($house_no)
    {
        $this->house_no = $house_no;
    }

    // public function get

    public function formatFullAddress()
    {
        return "House no: {$this->house_no}, Flat no: {$this->flat_no},
        {$this->floor} floor, street: {$this->street}, state: {$this->state},
        city: {$this->city}, zipcode: {$this->zip}, country: {$this->country}";
    }
}
