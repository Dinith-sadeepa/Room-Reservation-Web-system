<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 6:23 PM
 */

require_once __DIR__ . "/../core/Reservation.php";

interface ReservationRepo
{
    public function setConnection(mysqli $connection): void;

    public function addReservation(Reservation $reservation): bool;

    public function updateReservation(Reservation $reservation): bool;

    public function updateStatus(string $status, int $id): bool;

    public function deleteReservation(int $id): bool;

    public function searchReservation(int $id): array;

    public function getAllReservations(): array;
}