<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 10:27 AM
 */
require_once __DIR__."/../core/Facility.php";

interface FacilityBO
{
    public function addFacility(Facility $facility): bool;

    public function updateFacility(Facility $facility): bool;

    public function deleteFacility(string $id): bool;

    public function searchFacility(string $id): array;

    public function getAllFacility(): array;
}