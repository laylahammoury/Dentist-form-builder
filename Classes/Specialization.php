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


    /**
     * @return mixed
     */
    public function getAreaOfStudy()
    {
        return $this->areaOfStudy;
    }

    /**
     * @param mixed $areaOfStudy
     */
    public function setAreaOfStudy($areaOfStudy)
    {
        $this->areaOfStudy = $areaOfStudy;
    }

    /**
     * @return mixed
     */
    public function getStartYear()
    {
        return $this->startYear;
    }

    /**
     * @param mixed $startYear
     */
    public function setStartYear($startYear)
    {
        $this->startYear = $startYear;
    }

}