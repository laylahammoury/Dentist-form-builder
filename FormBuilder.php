<?php


class FormBuilder implements FormBuilderInterface
{
    var $stringTest =  "temp";
    public function buildPerson()
    {
        $person = new Person();
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