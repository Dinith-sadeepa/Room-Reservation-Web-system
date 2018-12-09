<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 8:42 AM
 */

require_once __DIR__ . "/../core/Room.php";

interface RoomBO
{
    public function addRoom(Room $room): bool;

    public function updateRoom(Room $room): bool;

    public function updateStatus(int $roomId, string $status): bool;

    public function deleteRoom(string $id): bool;

    public function searchRoom(string $id): array;

    public function getAllRoom(): array;

    public function searchRoomForReservation(string $roomType, string $roomCategory): array;
}