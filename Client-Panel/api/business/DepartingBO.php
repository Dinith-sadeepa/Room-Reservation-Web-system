<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/6/2018
 * Time: 10:15 AM
 */

require_once __DIR__."/../core/Departing.php";

interface DepartingBO
{
    public function addDeparting(Departing $departing): bool;

    public function updateDeparting(Departing $departing): bool;

    public function deleteDeparting(int $id): bool;

    public function searchDeparting(int $id): array;

    public function getAllDeparting(): array;

    public function searchDepartingByResId(int $id): array;
}