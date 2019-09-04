<?php


class SpecialistBuilder extends FormBuilder
{

    public function buildPerson()
    {
     $person = new Person();
    }

    public function buildCertification()
    {
    $certificate = new Education();
    }

    public function buildAddress()
    {
    $address = new Address();
    }

    public function buildSpecialization()
    {
    $specialization = new Specialization();
    }
}