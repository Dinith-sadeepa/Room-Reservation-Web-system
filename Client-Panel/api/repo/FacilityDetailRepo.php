<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 6:54 PM
 */

require_once __DIR__ . "/../core/FacilityDetail.php";

interface FacilityDetailRepo
{
    public function setConnection(mysqli $connection): void;

    public function addFacilityDetail(FacilityDetail $facilityDetail): bool;

    public function getAllFacilityDetails(): array;
}