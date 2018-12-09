<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 8:29 AM
 */

class Room{
    private $roomId;
    private $roomType;
    private $roomCategory;
    private $roomFloor;
    private $roomPrice;
    private $roomStatus;

    /**
     * Room constructor.
     * @param $roomId
     * @param $roomType
     * @param $roomCategory
     * @param $roomFloor
     * @param $roomPrice
     * @param $roomStatus
     */
    public function __construct($roomId, $roomType, $roomCategory, $roomFloor, $roomPrice, $roomStatus)
    {
        $this->roomId = $roomId;
        $this->roomType = $roomType;
        $this->roomCategory = $roomCategory;
        $this->roomFloor = $roomFloor;
        $this->roomPrice = $roomPrice;
        $this->roomStatus = $roomStatus;
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
    public function setRoomId($roomId)
    {
        $this->roomId = $roomId;
    }

    /**
     * @return mixed
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * @param mixed $roomType
     */
    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;
    }

    /**
     * @return mixed
     */
    public function getRoomCategory()
    {
        return $this->roomCategory;
    }

    /**
     * @param mixed $roomCategory
     */
    public function setRoomCategory($roomCategory)
    {
        $this->roomCategory = $roomCategory;
    }

    /**
     * @return mixed
     */
    public function getRoomFloor()
    {
        return $this->roomFloor;
    }

    /**
     * @param mixed $roomFloor
     */
    public function setRoomFloor($roomFloor)
    {
        $this->roomFloor = $roomFloor;
    }

    /**
     * @return mixed
     */
    public function getRoomPrice()
    {
        return $this->roomPrice;
    }

    /**
     * @param mixed $roomPrice
     */
    public function setRoomPrice($roomPrice)
    {
        $this->roomPrice = $roomPrice;
    }

    /**
     * @return mixed
     */
    public function getRoomStatus()
    {
        return $this->roomStatus;
    }

    /**
     * @param mixed $roomStatus
     */
    public function setRoomStatus($roomStatus)
    {
        $this->roomStatus = $roomStatus;
    }



}