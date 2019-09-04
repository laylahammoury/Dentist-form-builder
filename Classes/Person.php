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

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param mixed $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @return mixed
     */
    public function getPhoneNo()
    {
        return $this->phoneNo;
    }

    /**
     * @param mixed $phoneNo
     */
    public function setPhoneNo($phoneNo)
    {
        $this->phoneNo = $phoneNo;
    }

    /**
     * @return mixed
     */
    public function getLicenceCountryNo()
    {
        return $this->licenceCountryNo;
    }

    /**
     * @param mixed $licenceCountryNo
     */
    public function setLicenceCountryNo($licenceCountryNo)
    {
        $this->licenceCountryNo = $licenceCountryNo;
    }

    /**
     * @return mixed
     */
    public function getLicenceNo()
    {
        return $this->licenceNo;
    }

    /**
     * @param mixed $licenceNo
     */
    public function setLicenceNo($licenceNo)
    {
        $this->licenceNo = $licenceNo;
    }

    /**
     * @return mixed
     */
    public function getYearsInPractice()
    {
        return $this->yearsInPractice;
    }

    /**
     * @param mixed $yearsInPractice
     */
    public function setYearsInPractice($yearsInPractice)
    {
        $this->yearsInPractice = $yearsInPractice;
    }


}