<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 10:28 AM
 */

require_once __DIR__."/../FacilityBO.php";
require_once __DIR__."/../../core/Facility.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../repo/impl/FacilityRepoImpl.php";

class FacilityBOImpl implements FacilityBO
{

    public function addFacility(Facility $facility): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $facilityRepo = new FacilityRepoImpl();
        $facilityRepo->setConnection($connection);
        return $facilityRepo->addFacility($facility);
    }

    public function updateFacility(Facility $facility): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $facilityRepo = new FacilityRepoImpl();
        $facilityRepo->setConnection($connection);
        return $facilityRepo->updateFacility($facility);
    }

    public function deleteFacility(string $id): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $facilityRepo = new FacilityRepoImpl();
        $facilityRepo->setConnection($connection);
        return $facilityRepo->deleteFacility($id);
    }

    public function searchFacility(string $id): array
    {
        // TODO: Implement searchRoom() method.
    }

    public function getAllFacility(): array
    {
        $connection = (new DBConnection())->getDBConnection();
        $facilityRepo = new FacilityRepoImpl();
        $facilityRepo->setConnection($connection);
        return $facilityRepo->getAllRoom();
    }
}