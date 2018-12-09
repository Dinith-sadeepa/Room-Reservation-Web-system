<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 8:27 AM
 */

require_once __DIR__ . "/../business/impl/RoomBOImpl.php";
require_once __DIR__ . "/../core/Room.php";
require_once __DIR__ . "/../core/RoomDetail.php";


$method = $_SERVER['REQUEST_METHOD'];

$roomBO = new RoomBOImpl();

switch ($method) {
    case "GET":
        $type = $_GET['type'];
        switch ($type) {
            case "loadRooms":
                echo json_encode($roomBO->getAllRoom());
                break;
            case "ReservationSearch":
                echo json_encode($roomBO->searchRoomForReservation($_GET['roomTypeComboBox'], $_GET['roomCategoryComboBox']));
                break;
        }

        break;
    case "POST":

        $type = $_POST['type'];

        switch ($type) {
            case "add":
//        $roomId = $_POST['roomId'];
                $roomType = $_POST['roomType'];
                $roomCategory = $_POST['roomCategory'];
                $roomFloor = $_POST['roomFloor'];
                $roomPrice = $_POST['roomPrice'];

                $room = new Room(0, $roomType, $roomCategory, $roomFloor, $roomPrice, 'available');
                echo $roomBO->addRoom($room);
                break;
            case "update":
                $roomId = $_POST['id'];
                $roomType = $_POST['roomType'];
                $roomCategory = $_POST['roomCategory'];
                $roomFloor = $_POST['roomFloor'];
                $roomPrice = $_POST['roomPrice'];

                $room = new Room($roomId, $roomType, $roomCategory, $roomFloor, $roomPrice, 'available');
                echo $roomBO->updateRoom($room);
                break;
            case "delete":
                echo $roomBO->deleteRoom(((int)$_POST['id']));
                break;
            case "updateStatus":
                $roomDetail = $_POST['roomDetail'];
                $roomArray = explode(",", $roomDetail);
                var_dump($roomArray[1]);
                echo $roomBO->updateStatus(((int)$roomArray[1]), 'available');
                break;
        }
        break;
}