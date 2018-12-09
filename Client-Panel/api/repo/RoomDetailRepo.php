<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 6:43 PM
 */

require_once __DIR__ . "/../core/RoomDetail.php";

interface RoomDetailRepo
{

    public function setConnection(mysqli $connection): void;

    public function addRoomDetail(RoomDetail $roomDetail): bool;

    public function getAllRoomDetails(): array;

    public function searchByReservationId($id): array;
}