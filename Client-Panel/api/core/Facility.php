<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 10:20 AM
 */

class Facility
{
    private $facilityId;
    private $facilityDescription;
    private $facilityPrice;

    /**
     * Facility constructor.
     * @param $facilityId
     * @param $facilityDescription
     * @param $facilityPrice
     */
    public function __construct($facilityId, $facilityDescription, $facilityPrice)
    {
        $this->facilityId = $facilityId;
        $this->facilityDescription = $facilityDescription;
        $this->facilityPrice = $facilityPrice;
    }

    /**
     * @return mixed
     */
    public function getFacilityId()
    {
        return $this->facilityId;
    }

    /**
     * @param mixed $facilityId
     */
    public function setFacilityId($facilityId): void
    {
        $this->facilityId = $facilityId;
    }

    /**
     * @return mixed
     */
    public function getFacilityDescription()
    {
        return $this->facilityDescription;
    }

    /**
     * @param mixed $facilityDescription
     */
    public function setFacilityDescription($facilityDescription): void
    {
        $this->facilityDescription = $facilityDescription;
    }

    /**
     * @return mixed
     */
    public function getFacilityPrice()
    {
        return $this->facilityPrice;
    }

    /**
     * @param mixed $facilityPrice
     */
    public function setFacilityPrice($facilityPrice): void
    {
        $this->facilityPrice = $facilityPrice;
    }


}