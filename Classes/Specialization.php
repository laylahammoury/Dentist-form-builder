<?php


class Specialization
{

    var $areaOfStudy;
    var $startYear;

    /**
     * Specialization constructor.
     * @param $areaOfStudy
     * @param $startYear
     */
    public function __construct($areaOfStudy, $startYear)
    {
        $this->areaOfStudy = $areaOfStudy;
        $this->startYear = $startYear;
    }

    //setters
    public function setAreaOfStudy($areaOfStudy)    {$this->areaOfStudy = $areaOfStudy;}
    public function setStartYear($startYear)    {$this->startYear = $startYear;}

    //getters
    public function getAreaOfStudy() :string    {return $this->areaOfStudy;}
    public function getStartYear() :int     {return $this->startYear;}

}