<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 8:34 AM
 */

require_once __DIR__ . "/../RoomRepo.php";
require_once __DIR__ . "/../../core/RoomDetail.php";
require_once __DIR__ . "/../../core/Room.php";

class RoomRepoImpl implements RoomRepo
{

    private $connection;

    /**
     * RoomRepoImpl constructor.
     */
    public function __construct()
    {
        $this->connection = new mysqli();
    }


    public function setConnection(mysqli $connection): void
    {
        $this->connection = $connection;
    }

    public function addRoom(Room $room): bool
    {
        $resp = $this->connection->query(
            "INSERT INTO Room VALUES ('{$room->getRoomId()}',
                                            '{$room->getRoomType()}',
                                            '{$room->getRoomCategory()}',
                                            {$room->getRoomFloor()},
                                            {$room->getRoomPrice()},
                                            '{$room->getRoomStatus()}')"
        );

        if($resp >0){
            return true;
        }else{
            return false;
        }
    }

    public function updateRoom(Room $room): bool
    {
        return $this->connection->query(
                "UPDATE Room SET roomId = {$room->getRoomId()} , roomType = '{$room->getRoomType()}' , roomCategory = '{$room->getRoomCategory()}' , roomFloor = {$room->getRoomFloor()} , roomPrice = {$room->getRoomPrice()}
                WHERE roomId = {$room->getRoomId()}"
            )>0;
    }

    public function deleteRoom(int $id): bool
    {
        return $this->connection->query(
                "DELETE FROM Room
                WHERE roomId = {$id}"
            )>0;
    }

    public function searchRoom(int $id): array
    {
        // TODO: Implement searchRoom() method.
    }

    public function getAllRoom(): array
    {
        $res = $this->connection->query(
            "Select * from Room"
        );
        return $res->fetch_all();
    }

    public function searchRoomForReservation(string $roomType, string $roomCategory): array
    {
        $res = $this->connection->query(
            "Select * from Room WHERE roomType = '{$roomType}' AND roomCategory = '{$roomCategory}' AND status = 'available'"
        );
        return $res->fetch_all();
    }

    public function updateStatus(int $roomId, string $status): bool
    {
        return $this->connection->query(
                "UPDATE Room SET status = '{$status}'
                WHERE roomId = {$roomId}"
            )>0;
    }
}