<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 8:43 AM
 */

require_once __DIR__ . "/../../core/Room.php";
require_once __DIR__ . "/../../core/RoomDetail.php";
require_once __DIR__ . "/../RoomBO.php";
require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../repo/impl/RoomRepoImpl.php";

class RoomBOImpl implements RoomBO
{

    public function addRoom(Room $room): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $roomRepo = new RoomRepoImpl();
        $roomRepo->setConnection($connection);
        return $roomRepo->addRoom($room);
    }

    public function updateRoom(Room $room): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $roomRepo = new RoomRepoImpl();
        $roomRepo->setConnection($connection);
        return $roomRepo->updateRoom($room);
    }

    public function deleteRoom(string $id): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $roomRepo = new RoomRepoImpl();
        $roomRepo->setConnection($connection);
        return $roomRepo->deleteRoom($id);
    }

    public function searchRoom(string $id): array
    {

    }

    public function getAllRoom(): array
    {
        $connection = (new DBConnection())->getDBConnection();
        $roomRepo = new RoomRepoImpl();
        $roomRepo->setConnection($connection);
        return $roomRepo->getAllRoom();
    }

    public function searchRoomForReservation(string $roomType, string $roomCategory): array
    {
        $connection = (new DBConnection())->getDBConnection();
        $roomRepo = new RoomRepoImpl();
        $roomRepo->setConnection($connection);
        return $roomRepo->searchRoomForReservation($roomType, $roomCategory);
    }

    public function updateStatus(int $roomId, string $status): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $roomRepo = new RoomRepoImpl();
        $roomRepo->setConnection($connection);
        return $roomRepo->updateStatus($roomId, $status);
    }
}