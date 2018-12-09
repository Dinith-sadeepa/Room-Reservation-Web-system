<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 6:12 PM
 */

require_once __DIR__."/../core/Guest.php";

interface UserRepo
{
    public function setConnection(mysqli $connection): void;

    public function addUser(Guest $guest): bool;

    public function updateUser(Guest $guest): bool;

    public function deleteUser(int $id): bool;

    public function searchUser(int $id): array;

    public function searchByNic(string $nic): array;

    public function getAllUsers(): array;
}