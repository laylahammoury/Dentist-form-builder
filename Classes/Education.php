<?php


class Education
{
    var $degree;
    var $major;
    var $school;
    var $year;

    /**
     * Education constructor.
     * @param $degree
     * @param $major
     * @param $school
     * @param $year
     */
    public function __construct($degree, $major, $school, $year)
    {
        $this->degree = $degree;
        $this->major = $major;
        $this->school = $school;
        $this->year = $year;
    }


    //setters
    public function setDegree($degree)  {$this->degree = $degree;}
    public function setMajor($major)    {$this->major = $major;}
    public function setSchool($school)    {$this->school = $school;}
    public function setYear($year)    {$this->year = $year;}

    //getters
    public function getDegree() : string    {return $this->degree;}
    public function getMajor() : string    {return $this->major;}
    public function getYear() : int    {return $this->year;}
    public function getSchool() : string    {return $this->school;}

}