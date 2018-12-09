<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/6/2018
 * Time: 10:09 AM
 */

class Departing
{
    private $departingId;
    private $reservationId;
    private $checkOutDate;

    /**
     * Departing constructor.
     * @param $departingId
     * @param $reservationId
     * @param $checkOutDate
     */
    public function __construct($departingId, $reservationId, $checkOutDate)
    {
        $this->departingId = $departingId;
        $this->reservationId = $reservationId;
        $this->checkOutDate = $checkOutDate;
    }

    /**
     * @return mixed
     */
    public function getDepartingId()
    {
        return $this->departingId;
    }

    /**
     * @param mixed $departingId
     */
    public function setDepartingId($departingId): void
    {
        $this->departingId = $departingId;
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
    public function getCheckOutDate()
    {
        return $this->checkOutDate;
    }

    /**
     * @param mixed $checkOutDate
     */
    public function setCheckOutDate($checkOutDate): void
    {
        $this->checkOutDate = $checkOutDate;
    }




}