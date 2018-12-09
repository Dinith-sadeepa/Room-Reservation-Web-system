<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 8:15 PM
 */

require_once __DIR__ . "/../core/RoomDetail.php";

interface RoomDetailBO
{
    public function addRoomDetail(RoomDetail $roomDetail): bool;

    public function getAllRoomDetails(): array;

    public function searchByReservationId($id): array;
}