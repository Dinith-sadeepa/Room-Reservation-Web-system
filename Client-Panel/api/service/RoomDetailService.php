<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/6/2018
 * Time: 5:56 PM
 */

require_once __DIR__ . "/../business/impl/RoomDetailBOImpl.php";
require_once __DIR__ . "/../core/RoomDetail.php";

$method = $_SERVER['REQUEST_METHOD'];

$roomDetailBO = new RoomDetailBOImpl();

switch ($method) {
    case "GET":

        $type = $_GET['type'];
        switch ($type) {
            case 'searchByReservationId':
                $id = $_GET['id'];
                echo json_encode($roomDetailBO->searchByReservationId(((int)$id)));
                break;
            case 'getAll':
                echo json_encode($roomDetailBO->getAllRoomDetails());
                break;
        }
        break;

    case "POST":
        break;
}