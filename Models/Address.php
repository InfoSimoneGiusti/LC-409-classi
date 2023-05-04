<?php

class Address {

    public $street;
    public $city;
    public $postcode;

    public function __construct($street, $city, $postcode)
    {
        $this->street = $street;
        $this->city = $city;
        $this->postcode = $postcode;
    }

}