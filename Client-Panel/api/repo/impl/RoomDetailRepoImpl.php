<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 6:47 PM
 */

require_once __DIR__ . "/../RoomDetailRepo.php";
require_once __DIR__ . "/../../core/RoomDetail.php";

class RoomDetailRepoImpl implements RoomDetailRepo
{
    private $connection;

    /**
     * RoomDetailRepoImpl constructor.
     */
    public function __construct()
    {

    }

    public function addRoomDetail(RoomDetail $roomDetail): bool
    {
        return $this->connection->query(
                "INSERT INTO RoomDetail VALUES ({$roomDetail->getRoomDetailId()},{$roomDetail->getRoomId()},{$roomDetail->getReservationId()},{$roomDetail->getPrice()})"
            ) > 0;
    }

    public function setConnection(mysqli $connection): void
    {
        $this->connection = $connection;
    }

    public function getAllRoomDetails(): array
    {
        $resp = $this->connection->query(
            "SELECT * FROM RoomDetail"
        );
        return $resp->fetch_all();
    }

    public function searchByReservationId($id): array
    {
        $resp = $this->connection->query(
            "SELECT * FROM RoomDetail WHERE reservationId = {$id}"
        );
        return $resp->fetch_all();
    }
}