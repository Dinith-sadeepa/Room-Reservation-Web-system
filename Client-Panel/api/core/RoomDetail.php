<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 6:45 PM
 */

class RoomDetail
{
    private $roomDetailId;
    private $roomId;
    private $reservationId;
    private $price;

    /**
     * RoomDetail constructor.
     * @param $roomDetailId
     * @param $roomId
     * @param $reservationId
     * @param $price
     */
    public function __construct($roomDetailId, $roomId, $reservationId, $price)
    {
        $this->roomDetailId = $roomDetailId;
        $this->roomId = $roomId;
        $this->reservationId = $reservationId;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getRoomDetailId()
    {
        return $this->roomDetailId;
    }

    /**
     * @param mixed $roomDetailId
     */
    public function setRoomDetailId($roomDetailId): void
    {
        $this->roomDetailId = $roomDetailId;
    }

    /**
     * @return mixed
     */
    public function getRoomId()
    {
        return $this->roomId;
    }

    /**
     * @param mixed $roomId
     */
    public function setRoomId($roomId): void
    {
        $this->roomId = $roomId;
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