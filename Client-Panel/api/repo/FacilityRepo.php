<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 10:19 AM
 */

require_once __DIR__."/../core/Facility.php";

interface FacilityRepo
{
    public function setConnection(mysqli $connection): void;

    public function addFacility(Facility $facility): bool;

    public function updateFacility(Facility $facility): bool;

    public function deleteFacility(int $id): bool;

    public function searchFacility(int $id): array;

    public function getAllRoom(): array;
}