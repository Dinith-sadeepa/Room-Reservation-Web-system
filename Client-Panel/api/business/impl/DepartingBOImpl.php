<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/6/2018
 * Time: 10:15 AM
 */

require_once __DIR__."/../DepartingBO.php";
require_once __DIR__."/../../core/Departing.php";
require_once __DIR__."/../../core/Reservation.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../repo/impl/DepartingRepoImpl.php";
require_once __DIR__."/../../repo/impl/ReservationRepoImpl.php";

class DepartingBOImpl implements DepartingBO
{

    public function addDeparting(Departing $departing): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $departingRepo = new DepartingRepoImpl();
        $departingRepo->setConnection($connection);
        $connection->autocommit(false);

        $departDone = $departingRepo->addDeparting($departing);
        if($departDone){
            $reservationRepo = new ReservationRepoImpl();
            $reservationRepo->setConnection($connection);
            $updated = $reservationRepo->updateStatus('departed',((int)$departing->getReservationId()));
            if($updated){
                $connection->commit();
                $connection->autocommit(true);
                return $updated;
            }
        }
        $connection->rollback();
        $connection->autocommit(true);
        return false;
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
        $connection = (new DBConnection())->getDBConnection();
        $departingRepo = new DepartingRepoImpl();
        $departingRepo->setConnection($connection);
        return $departingRepo->searchDepartingByResId($id);
    }
}