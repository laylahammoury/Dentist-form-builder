<?php


class FormBuilder implements FormBuilderInterface
{
    var $stringTest =  "temp";
    public function buildPerson()
    {
        $person = new Person("layla" , "Hammoury" , "Female" , "laylahammoury@gmail.com" , "www.blabla.com"
        ,"022222222" , "121212" , "123123123" , "5" );
    }

    public function buildEducation()
    {
       $certificate = new Education("Bachelor" ,"Computer Science ", "Palestine Polytechnic University","2020");
    }

    public function buildAddress()
    {
       $address = new Address("Palestine", "West Bank ","Hebron" , "41","456456");
    }
}