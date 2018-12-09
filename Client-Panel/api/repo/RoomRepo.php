<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 8:28 AM
 */


require_once __DIR__ . "/../core/Room.php";
require_once __DIR__ . "/../core/RoomDetail.php";

interface RoomRepo
{

    public function setConnection(mysqli $connection): void;

    public function addRoom(Room $room): bool;

    public function updateRoom(Room $room): bool;

    public function updateStatus(int $roomId, string $status): bool;

    public function deleteRoom(int $id): bool;

    public function searchRoom(int $id): array;

    public function searchRoomForReservation(string $roomType, string $roomCategory): array;

    public function getAllRoom(): array;


}