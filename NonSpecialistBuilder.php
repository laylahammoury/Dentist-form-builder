<?php


use mysql_xdevapi\CollectionAdd;

class NonSpecialistBuilder implements FormBuilder
{
 var $stringText = "temp";
    public function buildPerson()
    {
       $person = new Person();
       $person->setFirstName($this->stringText);
       $person->setLastName($this->stringText);
       $person->setEmail($this->stringText);
       $person->setGender($this->stringText);
       $person->setLicenceCountryNo($this->stringText);
       $person->setLicenceNo($this->stringText);
       $person->setWebsite($this->stringText);
       $person->setPhoneNo($this->stringText);
       $person->setYearsInPractice($this->stringText);
    }

    public function buildCertification()
    {
      $certificate = new Certificate();
    }

    public function buildAddress()
    {
        $address = new Address();
    }
}