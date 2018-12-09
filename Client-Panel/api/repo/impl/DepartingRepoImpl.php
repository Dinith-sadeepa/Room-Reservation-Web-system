<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/6/2018
 * Time: 10:12 AM
 */

require_once __DIR__."/../DepartingRepo.php";
require_once __DIR__."/../../core/Departing.php";

class DepartingRepoImpl implements DepartingRepo
{
    private $connection;

    public function setConnection(mysqli $connection): void
    {
        $this->connection = $connection;
    }

    public function addDeparting(Departing $departing): bool
    {
        return $this->connection->query(
                "INSERT INTO departing VALUES ({$departing->getDepartingId()},{$departing->getReservationId()},'{$departing->getCheckOutDate()}')"
            ) > 0;
    }

    public function updateDeparting(Departing $departing): bool
    {
        // TODO: Implement updateDeparting() method.
    }

    public function deleteDeparting(int $id): bool
    {
        // TODO: Implement deleteDeparting() method.
    }

    public function searchDeparting(int $id): array
    {
        // TODO: Implement searchDeparting() method.
    }

    public function getAllDeparting(): array
    {
        // TODO: Implement getAllDeparting() method.
    }

    public function searchDepartingByResId(int $id): array
    {
        $res = $this->connection->query(
            "Select * from Departing WHERE reservationId = {$id}"
        );
        return $res->fetch_all();
    }
}