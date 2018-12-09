<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/6/2018
 * Time: 6:02 PM
 */

require_once __DIR__ . "/../business/impl/FacilityDetailBOImpl.php";
require_once __DIR__ . "/../core/FacilityDetail.php";

$method = $_SERVER['REQUEST_METHOD'];

$facilityDetailBO = new FacilityDetailBOImpl();

switch ($method) {
    case "GET":
        echo json_encode($facilityDetailBO->getAllFacilityDetails());
        break;
    case "POST":
        break;
}