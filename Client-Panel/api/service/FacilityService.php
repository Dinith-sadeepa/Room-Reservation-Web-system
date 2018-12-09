<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 10:31 AM
 */

require_once __DIR__ . "/../business/impl/FacilityBOImpl.php";
require_once __DIR__ . "/../core/Facility.php";

$method = $_SERVER['REQUEST_METHOD'];

$facilityBO = new FacilityBOImpl();

switch ($method) {
    case "GET":
        echo json_encode($facilityBO->getAllFacility());

        break;
    case "POST":

        $type = $_POST['type'];

        switch ($type) {
            case "add":
                $facilityDescription = $_POST['facilityDescription'];
                $facilityPrice = $_POST['facilityPrice'];
                $facility = new Facility(0, $facilityDescription, $facilityPrice);
                echo $facilityBO->addFacility($facility);
                break;
            case "update":
                $facilityDescription = $_POST['facilityDescription'];
                $facilityPrice = $_POST['facilityPrice'];
                $facilityId = (int)$_POST['id'];

                var_dump($facilityId);
                $facility = new Facility($facilityId, $facilityDescription, $facilityPrice);
                echo $facilityBO->updateFacility($facility);
                break;

            case "delete":
                echo $facilityBO->deleteFacility(((int)$_POST['id']));
                break;
        }
        break;
}