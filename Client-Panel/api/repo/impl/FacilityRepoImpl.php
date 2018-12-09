<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 10:22 AM
 */
require_once __DIR__."/../FacilityRepo.php";
require_once __DIR__."/../../core/Facility.php";

class FacilityRepoImpl implements FacilityRepo
{
    private $connection;
    /**
     * FacilityRepoImpl constructor.
     */
    public function __construct()
    {
        $this->connection = new mysqli();
    }

    public function setConnection(mysqli $connection): void
    {
        $this->connection = $connection;
    }

    public function addFacility(Facility $facility): bool
    {
        return $this->connection->query(
          "INSERT INTO Facility VALUES ({$facility->getFacilityId()},'{$facility->getFacilityDescription()}',{$facility->getFacilityPrice()})"
        )>0;
    }

    public function updateFacility(Facility $facility): bool
    {
        return $this->connection->query(
                "UPDATE Facility SET facilityId = {$facility->getFacilityId()} , description = '{$facility->getFacilityDescription()}' , facilityPrice = {$facility->getFacilityPrice()}
                WHERE facilityId = {$facility->getFacilityId()}"
            )>0;
    }

    public function deleteFacility(int $id): bool
    {
        return $this->connection->query(
                "DELETE FROM Facility
                WHERE facilityId = {$id}"
            )>0;
    }

    public function searchFacility(int $id): array
    {
        // TODO: Implement searchRoom() method.
    }

    public function getAllRoom(): array
    {
        return $this->connection->query("select * from Facility")->fetch_all();
    }
}