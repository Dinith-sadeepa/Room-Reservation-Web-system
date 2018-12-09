<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 6:17 PM
 */

require_once __DIR__ . "/../UserRepo.php";
require_once __DIR__ . "/../../core/Guest.php";

class UserRepoImpl implements UserRepo
{

    private $connection;

    /**
     * UserRepoImpl constructor.
     */
    public function __construct()
    {
    }

    public function setConnection(mysqli $connection): void
    {
        $this->connection = $connection;
    }

    public function addUser(Guest $guest): bool
    {
        return $this->connection->query(
                "INSERT INTO User VALUES ({$guest->getUserId()},'{$guest->getUserName()}','{$guest->getUserNIC()}','{$guest->getTelephoneNo()}')"
            ) > 0;
    }

    public function updateUser(Guest $guest): bool
    {
        return $this->connection->query(
                "UPDATE user SET userId = {$guest->getUserId()},userName = '{$guest->getUserName()}' ,nic = '{$guest->getUserNIC()}' , telephoneNo = '{$guest->getTelephoneNo()}' WHERE userId = {$guest->getUserId()}"
            ) > 0;
    }

    public function deleteUser(int $id): bool
    {
        return $this->connection->query(
                "DELETE FROM user WHERE userId = {$id}"
            ) > 0;
    }

    public function searchUser(int $id): array
    {
        return $this->connection->query(
            "SELECT * FROM User WHERE userId = {$id}"
        )->fetch_all();
    }

    public function getAllUsers(): array
    {
        return $this->connection->query(
            "SELECT * FROM User"
        )->fetch_all();
    }

    public function searchByNic(string $nic): array
    {
        return $this->connection->query(
            "SELECT * FROM User WHERE nic = '{$nic}'"
        )->fetch_all();
    }
}