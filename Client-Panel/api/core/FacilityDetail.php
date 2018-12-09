<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 6:54 PM
 */

class FacilityDetail
{
    private $facilityDetailId;
    private $facilityId;
    private $reservationId;
    private $price;

    /**
     * FacilityDetail constructor.
     * @param $facilityDetailId
     * @param $facilityId
     * @param $reservationId
     * @param $price
     */
    public function __construct($facilityDetailId, $facilityId, $reservationId, $price)
    {
        $this->facilityDetailId = $facilityDetailId;
        $this->facilityId = $facilityId;
        $this->reservationId = $reservationId;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getFacilityDetailId()
    {
        return $this->facilityDetailId;
    }

    /**
     * @param mixed $facilityDetailId
     */
    public function setFacilityDetailId($facilityDetailId): void
    {
        $this->facilityDetailId = $facilityDetailId;
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
    public function getReservationId()
    {
        return $this->reservationId;
    }

    /**
     * @param mixed $reservationId
     */
    public function setReservationId($reservationId): void
    {
        $this->reservationId = $reservationId;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }


}