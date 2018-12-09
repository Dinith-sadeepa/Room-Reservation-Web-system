<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 8:15 PM
 */

require_once __DIR__."/../RoomDetailBO.php";
require_once __DIR__."/../../core/RoomDetail.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../repo/impl/RoomDetailRepoImpl.php";

class RoomDetailBOImpl implements RoomDetailBO
{

    public function addRoomDetail(RoomDetail $roomDetail): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $reservationRepo = new RoomDetailRepoImpl();
        $reservationRepo->setConnection($connection);
        return $reservationRepo->addRoomDetail($roomDetail);
    }

    public function getAllRoomDetails(): array
    {
        $connection = (new DBConnection())->getDBConnection();
        $reservationRepo = new RoomDetailRepoImpl();
        $reservationRepo->setConnection($connection);
        return $reservationRepo->getAllRoomDetails();
    }

    public function searchByReservationId($id): array
    {
        $connection = (new DBConnection())->getDBConnection();
        $reservationRepo = new RoomDetailRepoImpl();
        $reservationRepo->setConnection($connection);
        return $reservationRepo->searchByReservationId($id);
    }
}