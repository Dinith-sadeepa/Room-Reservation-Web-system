<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 8:01 PM
 */

require_once __DIR__ . "/../ReservationBO.php";
require_once __DIR__ . "/../../core/Reservation.php";
require_once __DIR__ . "/../../core/Guest.php";
require_once __DIR__ . "/../../core/Room.php";
require_once __DIR__ . "/../../core/RoomDetail.php";
require_once __DIR__ . "/../../core/FacilityDetail.php";
require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../repo/impl/ReservationRepoImpl.php";
require_once __DIR__ . "/../../repo/impl/RoomRepoImpl.php";
require_once __DIR__ . "/../../repo/impl/UserRepoImpl.php";
require_once __DIR__ . "/../../repo/impl/RoomDetailRepoImpl.php";
require_once __DIR__ . "/../../repo/impl/FacilityDetailRepoImpl.php";

class ReservationBOImpl implements ReservationBO
{

    public function addReservation(Reservation $reservation): bool
    {
        $reservationDone = false;

        $connection = (new DBConnection())->getDBConnection();
        $reservationRepo = new ReservationRepoImpl();
        $userRepo = new UserRepoImpl();
        $roomDetailRepo = new RoomDetailRepoImpl();
        $facilityDetailRepo = new FacilityDetailRepoImpl();
        $roomRepo = new RoomRepoImpl();

        $reservationRepo->setConnection($connection);
        $connection->autocommit(false);

//        user
        $userRepo->setConnection($connection);
        $userDone = $userRepo->addUser($reservation->getGuest());

//        var_dump($userDone);
        if ($userDone) {
            $reservationDone = $reservationRepo->addReservation($reservation);
//            var_dump($reservationDone);
            if ($reservationDone) {
                $roomDetailRepo->setConnection($connection);
                $roomDetails = $reservation->getRoomDetail();
                $roomDone = false;
                foreach ($roomDetails as $roomDetail) {
                    $roomDetailDone = $roomDetailRepo->addRoomDetail($roomDetail);
                    if ($roomDetailDone) {
                        $roomRepo->setConnection($connection);
                        $roomDone = $roomRepo->updateStatus($roomDetail->getRoomId(), 'booked');
                    }
                }
//                var_dump($roomDone);
                if ($roomDone) {
                    $facilityDetailRepo->setConnection($connection);
                    $facilityDetails = $reservation->getFacilityDetail();
                    $facilityDone = false;
                    foreach ($facilityDetails as $facilityDetail) {
                        $facilityDone = $facilityDetailRepo->addFacilityDetail($facilityDetail);
                    }
//                    var_dump($facilityDone);
                    if ($facilityDone) {
                        $connection->commit();
                        $connection->autocommit(true);
                        return $facilityDone;
                    }
                }
            }
        }
        $connection->rollback();
        $connection->autocommit(true);
        return false;
    }

    public function updateReservation(Reservation $reservation): bool
    {
        // TODO: Implement updateReservation() method.
    }

    public function deleteReservation(int $id): bool
    {
        // TODO: Implement deleteReservation() method.
    }

    public function searchReservation(int $id): array
    {
        $connection = (new DBConnection())->getDBConnection();
        $reservationRepo = new ReservationRepoImpl();
        $reservationRepo->setConnection($connection);
        return $reservationRepo->searchReservation($id);
    }

    public function getAllReservations(): array
    {
        $connection = (new DBConnection())->getDBConnection();
        $reservationRepo = new ReservationRepoImpl();
        $reservationRepo->setConnection($connection);
        return $reservationRepo->getAllReservations();
    }

    public function updateStatus(string $status, int $id): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $reservationRepo = new ReservationRepoImpl();
        $reservationRepo->setConnection($connection);
        return $reservationRepo->updateStatus($status,$id);
    }
}