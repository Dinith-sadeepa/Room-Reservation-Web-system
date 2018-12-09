<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 6:56 PM
 */

require_once __DIR__ . "/../FacilityDetailRepo.php";
require_once __DIR__ . "/../../core/FacilityDetail.php";

class FacilityDetailRepoImpl implements FacilityDetailRepo
{
    private $connection;

    /**
     * FacilityDetailRepoImpl constructor.
     */
    public function __construct()
    {
    }


    public function addFacilityDetail(FacilityDetail $facilityDetail): bool
    {
        return $this->connection->query(
                "INSERT INTO FacilityDetail VALUES ({$facilityDetail->getFacilityDetailId()},{$facilityDetail->getFacilityId()},{$facilityDetail->getReservationId()},{$facilityDetail->getPrice()})"
            ) > 0;
    }

    public function setConnection(mysqli $connection): void
    {
        $this->connection = $connection;
    }

    public function getAllFacilityDetails(): array
    {
        $resp = $this->connection->query(
            "SELECT * FROM facilityDetail"
        );
        return $resp->fetch_all();
    }
}