<?php


class Person
{
    var $firstName;
    var $lastName;
    var $gender;
    var $email;
    var $website;
    var $phoneNo;
    var $licenceCountryNo;
    var $licenceNo;
    var $yearsInPractice;

    /**
     * Person constructor.
     * @param $firstName
     * @param $lastName
     * @param $gender
     * @param $email
     * @param $website
     * @param $phoneNo
     * @param $licenceCountryNo
     * @param $licenceNo
     * @param $yearsInPractice
     */
    public function __construct($firstName, $lastName, $gender, $email, $website, $phoneNo, $licenceCountryNo, $licenceNo, $yearsInPractice)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        $this->email = $email;
        $this->website = $website;
        $this->phoneNo = $phoneNo;
        $this->licenceCountryNo = $licenceCountryNo;
        $this->licenceNo = $licenceNo;
        $this->yearsInPractice = $yearsInPractice;
    }

   //setters
    public function setFirstName($firstName)    {$this->firstName = $firstName;}
    public function setLastName($lastName)    {$this->lastName = $lastName;}
    public function setGender($gender)    {$this->gender = $gender;}
    public function setEmail($email)    {$this->email = $email;}
    public function setWebsite($website)    {$this->website = $website;}
    public function setPhoneNo($phoneNo)    {$this->phoneNo = $phoneNo;}
    public function setLicenceCountryNo($licenceCountryNo)    {$this->licenceCountryNo = $licenceCountryNo;}
    public function setLicenceNo($licenceNo)    {$this->licenceNo = $licenceNo;}
    public function setYearsInPractice($yearsInPractice)    {$this->yearsInPractice = $yearsInPractice;}


//getters
    public function getFirstName() : string    {return $this->firstName;}
    public function getLastName() :string     {return $this->lastName;}
    public function getGender() :string     {return $this->gender;}
    public function getEmail()     {return $this->email;}
    public function getWebsite()    {return $this->website;}
    public function getPhoneNo() :int    {return $this->phoneNo;}
    public function getLicenceCountryNo() :int     {return $this->licenceCountryNo;}
    public function getLicenceNo(): int     {return $this->licenceNo;}
    public function getYearsInPractice() :int     {return $this->yearsInPractice;}

}