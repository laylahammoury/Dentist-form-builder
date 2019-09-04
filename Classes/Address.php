<?php


class Address
{

    var $country;
    var $state;
    var $city;
    var $street;
    var $postalCode;

    /**
     * Address constructor.
     * @param $country
     * @param $state
     * @param $city
     * @param $street
     * @param $postalCode
     */
    public function __construct($country, $state, $city, $street, $postalCode)
    {
        $this->country = $country;
        $this->state = $state;
        $this->city = $city;
        $this->street = $street;
        $this->postalCode = $postalCode;
    }

   //setters
    public function setCountry($country)    {$this->country = $country;}
    public function setState($state)    {$this->state = $state;}
    public function setCity($city)    {$this->city = $city;}
    public function setStreet($street)    {$this->street = $street;}
    public function setPostalCode($postalCode)    {$this->postalCode = $postalCode;}

    //getters
    public function getCountry() : string     {return $this->country;}
    public function getState() : string     {return $this->state;}
    public function getCity() : string     {return $this->city;}
    public function getStreet() :int    {return $this->street;}
    public function getPostalCode()   {return $this->postalCode;}



}