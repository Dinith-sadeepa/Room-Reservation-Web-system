<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 6:27 PM
 */

class Reservation
{
    private $reservationId;
    private $checkInDate;
    private $checkOutDate;
    private $noOfAdults;
    private $userId;
    private $reservationFee;
    private $status;

    private $guest;
    private $roomDetail;
    private $facilityDetail;
    private $payment;

    /**
     * Reservation constructor.
     * @param $reservationId
     * @param $checkInDate
     * @param $checkInTime
     * @param $checkOutDate
     * @param $noOfAdults
     * @param $userId
     * @param $reservationFee
     * @param $guest
     * @param $roomDetail
     * @param $facilityDetail
     * @param $payment
     */

    public function __construct($reservationId, $checkInDate,$checkOutDate, $noOfAdults, $userId, $reservationFee, $guest, $roomDetail, $facilityDetail, $payment)
    {
        $this->reservationId = $reservationId;
        $this->checkInDate = $checkInDate;
        $this->checkOutDate = $checkOutDate;
        $this->noOfAdults = $noOfAdults;
        $this->userId = $userId;
        $this->reservationFee = $reservationFee;
        $this->guest = $guest;
        $this->roomDetail = $roomDetail;
        $this->facilityDetail = $facilityDetail;
        $this->payment = $payment;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */

    public function getGuest()
    {
        return $this->guest;
    }

    /**
     * @param mixed $guest
     */
    public function setGuest($guest): void
    {
        $this->guest = $guest;
    }

    /**
     * @return mixed
     */
    public function getRoomDetail()
    {
        return $this->roomDetail;
    }

    /**
     * @param mixed $roomDetail
     */
    public function setRoomDetail($roomDetail): void
    {
        $this->roomDetail = $roomDetail;
    }

    /**
     * @return mixed
     */
    public function getFacilityDetail()
    {
        return $this->facilityDetail;
    }

    /**
     * @param mixed $facilityDetail
     */
    public function setFacilityDetail($facilityDetail): void
    {
        $this->facilityDetail = $facilityDetail;
    }

    /**
     * @return mixed
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param mixed $payment
     */
    public function setPayment($payment): void
    {
        $this->payment = $payment;
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
    public function getCheckInDate()
    {
        return $this->checkInDate;
    }

    /**
     * @param mixed $checkInDate
     */
    public function setCheckInDate($checkInDate): void
    {
        $this->checkInDate = $checkInDate;
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

    /**
     * @return mixed
     */
    public function getNoOfAdults()
    {
        return $this->noOfAdults;
    }

    /**
     * @param mixed $noOfAdults
     */
    public function setNoOfAdults($noOfAdults): void
    {
        $this->noOfAdults = $noOfAdults;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getReservationFee()
    {
        return $this->reservationFee;
    }

    /**
     * @param mixed $reservationFee
     */
    public function setReservationFee($reservationFee): void
    {
        $this->reservationFee = $reservationFee;
    }




}