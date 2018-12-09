<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 7:50 PM
 */

require_once __DIR__."/../UserBO.php";
require_once __DIR__."/../../core/Guest.php";
require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../repo/impl/UserRepoImpl.php";

class UserBOImpl implements UserBO
{


    public function addUser(Guest $guest): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $userRepo = new UserRepoImpl();
        $userRepo->setConnection($connection);
        return $userRepo->addUser($guest);
    }

    public function updateUser(Guest $guest): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $userRepo = new UserRepoImpl();
        $userRepo->setConnection($connection);
        return $userRepo->updateUser($guest);
    }

    public function deleteUser(int $id): bool
    {
        $connection = (new DBConnection())->getDBConnection();
        $userRepo = new UserRepoImpl();
        $userRepo->setConnection($connection);
        return $userRepo->deleteUser($id);
    }

    public function searchUser(int $id): array
    {
        $connection = (new DBConnection())->getDBConnection();
        $userRepo = new UserRepoImpl();
        $userRepo->setConnection($connection);
        return $userRepo->searchUser($id);
    }

    public function getAllUsers(): array
    {
        $connection = (new DBConnection())->getDBConnection();
        $userRepo = new UserRepoImpl();
        $userRepo->setConnection($connection);
        return $userRepo->getAllUsers();
    }

    public function searchByNIC(string $nic): array
    {
        $connection = (new DBConnection())->getDBConnection();
        $userRepo = new UserRepoImpl();
        $userRepo->setConnection($connection);
        return $userRepo->searchByNic($nic);
    }
}