<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 6:31 PM
 */

require_once __DIR__ . "/../ReservationRepo.php";
require_once __DIR__ . "/../../core/Reservation.php";

class ReservationRepoImpl implements ReservationRepo
{
    private $connection;

    /**
     * ReservationRepoImpl constructor.
     */
    public function __construct()
    {
    }


    public function setConnection(mysqli $connection): void
    {
        $this->connection = $connection;
    }

    public function addReservation(Reservation $reservation): bool
    {
        $resId = (int)$reservation->getReservationId();
        $noOfADults = (int)$reservation->getNoOfAdults();
        $resUser = (int)$reservation->getUserId();
        $resFee = (float)$reservation->getReservationFee();

        return $this->connection->query(
                "INSERT INTO Reservation VALUES ({$resId},'{$reservation->getCheckInDate()}','{$reservation->getCheckOutDate()}',{$noOfADults},{$resUser},{$resFee},'on going')"
            ) > 0;
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
        $resp = $this->connection->query(
            "SELECT * FROM Reservation WHERE reservationId = {$id} AND status = 'on going'"
        );
        return $resp->fetch_all();
    }

    public function getAllReservations(): array
    {
        $resp = $this->connection->query(
            "SELECT * FROM Reservation"
        );
        return $resp->fetch_all();
    }

    public function updateStatus(string $status, int $id): bool
    {
        return $this->connection->query(
                "UPDATE Reservation SET status = '{$status}' WHERE reservationId = {$id}"
            ) > 0;
    }
}