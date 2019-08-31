<?php


class Specialization
{

    var $areaOfStudy;
    var $startYear;

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