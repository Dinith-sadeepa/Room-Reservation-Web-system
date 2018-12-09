<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/6/2018
 * Time: 8:52 AM
 */

require_once __DIR__."/../business/impl/DepartingBOImpl.php";
require_once __DIR__."/../core/Departing.php";


$method = $_SERVER['REQUEST_METHOD'];

$departingBO = new DepartingBOImpl();

switch ($method){
    case "GET":
        $type = $_GET['type'];
        switch ($type){
            case "loadDeparting":
                echo json_encode($departingBO->getAllDeparting());
                break;
            case "searchDepartByResId":
                echo json_encode($departingBO->searchDepartingByResId($_GET['id']));
                break;
        }

        break;
    case "POST":
        $reservationId = $_POST['reservationIdText'];
        $checkInDate = $_POST['checkInDate'];

        $departing = new Departing(0,$reservationId,$checkInDate);
        echo $departingBO->addDeparting($departing);

        break;
}