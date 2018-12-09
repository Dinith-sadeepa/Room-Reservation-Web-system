<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 7:16 PM
 */

interface ReservationBO
{
    public function addReservation(Reservation $reservation): bool;

    public function updateReservation(Reservation $reservation): bool;

    public function updateStatus(string $status, int $id): bool;

    public function deleteReservation(int $id): bool;

    public function searchReservation(int $id): array;

    public function getAllReservations(): array;
}