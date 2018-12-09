<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 8:11 PM
 */

require_once __DIR__."/../FacilityDetailBO.php";
require_once __DIR__."/../../core/FacilityDetail.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../repo/impl/FacilityDetailRepoImpl.php";


class FacilityDetailBOImpl implements FacilityDetailBO
{

    public function addFacilityDetail(FacilityDetail $facilityDetail): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $reservationRepo = new FacilityDetailRepoImpl();
        $reservationRepo->setConnection($connection);
        return $reservationRepo->addFacilityDetail($facilityDetail);
    }

    public function getAllFacilityDetails(): array
    {
        $connection = (new DBConnection())->getDBConnection();
        $reservationRepo = new FacilityDetailRepoImpl();
        $reservationRepo->setConnection($connection);
        return $reservationRepo->getAllFacilityDetails();
    }
}