<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 8:10 PM
 */
require_once __DIR__ . "/../core/FacilityDetail.php";

interface FacilityDetailBO
{
    public function addFacilityDetail(FacilityDetail $facilityDetail): bool;

    public function getAllFacilityDetails(): array;
}