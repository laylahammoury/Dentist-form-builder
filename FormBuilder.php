<?php


class FormBuilder implements FormBuilderInterface
{
    var $stringTest =  "temp";
    public function buildPerson()
    {
        $person = new Person();
    }

    public function buildEducation()
    {
       $certificate = new Education();
    }

    public function buildAddress()
    {
       $address = new Address();
    }
}