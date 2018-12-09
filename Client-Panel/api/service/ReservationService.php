<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 9:19 PM
 */

require_once __DIR__ . "/../business/impl/ReservationBOImpl.php";
require_once __DIR__ . "/../core/Reservation.php";
require_once __DIR__ . "/../core/RoomDetail.php";
require_once __DIR__ . "/../core/FacilityDetail.php";

$method = $_SERVER['REQUEST_METHOD'];


$reservationBO = new ReservationBOImpl();

switch ($method) {
    case "GET":
        $type = $_GET['type'];
        switch ($type) {
            case "loadReservations":
                echo json_encode($reservationBO->getAllReservations());
                break;
            case "searchReservation":
                echo json_encode($reservationBO->searchReservation($_GET['id']));
                break;
        }

        break;
    case "POST":
        $type = $_POST['type'];

        switch ($type) {
            case "addReservation":
                //        guest Details
                $guestId = $_POST['userId'];
                $guestName = $_POST['guestNameText'];
                $guestAddress = $_POST['guestAddressText'];
                $guestNIC = $_POST['guestNICText'];
                $guestEMail = $_POST['guestEMailText'];
                $guestPhoneNo = $_POST['guestPhoneNoText'];

//        reservation Details
                $reservationId = $_POST['reservationId'];
                $checkInDate = $_POST['checkInDate'];
                $checkOutDate = $_POST['checkOutDate'];
                $noOfAdults = $_POST['noOfAdultsText'];
                $noOfRooms = $_POST['noOfRoomsComboBox'];
                $reservationFee = $_POST['reservationFee'];

//        room Details
                $room = $_POST['selectedRoom'];
                $roomArray = explode(",", $room);
                $tempRoomArray = array();
                $count = 0;
                $arraySize = sizeof($roomArray);
                $t = $arraySize / 6;
//        echo $arraySize;

                for ($i = 0; $i < $arraySize / 6; $i++) {
                    $tempArray1 = array();
                    for ($k = $count; $k < $arraySize; $k++) {
                        $tempArray1[] = $roomArray[$k];
                        if ($k == 5) {
                            $count = 6;
                            break;
                        } else if ($k == 11) {
                            $count = 12;
                            break;
                        } else if ($k == 17) {
                            $count = 18;
                            break;
                        } else {

                        }
                    }
                    $tempRoomArray[] = $tempArray1;
                }

                $roomDetail = array();

//        var_dump($tempRoomArray);
                foreach ($tempRoomArray as $r) {
                    array_push($roomDetail, new RoomDetail(0, (int)$r[0], (int)$reservationId, (float)$r[4]));
                }
//        var_dump($roomDetail);


//        $facility Details
                $facility = $_POST['selectedFacility'];
                $facilityArray = explode(",", $facility);
                $tempFacilityArray = array();
                $countFacility = 0;
                $arrayFacilitySize = sizeof($facilityArray);
                $t = $arraySize / 6;


                for ($i = 0; $i < $arrayFacilitySize / 6; $i++) {
                    $tempArray1 = array();
                    for ($k = $countFacility; $k < $arrayFacilitySize; $k++) {
                        $tempArray1[] = $facilityArray[$k];
                        if ($k == 5) {
                            $countFacility = 6;
                            break;
                        } else if ($k == 11) {
                            $countFacility = 12;
                            break;
                        } else if ($k == 17) {
                            $countFacility = 18;
                            break;
                        } else {

                        }
                    }
                    $tempFacilityArray[] = $tempArray1;
                }

                $facilityDetail = array();
                foreach ($tempFacilityArray as $f) {
                    array_push($facilityDetail, new FacilityDetail(0, (int)$f[0], (int)$reservationId, (float)$f[2]));
                }

//        var_dump($facilityDetail);

//        payment Details
//        $cardType = $_POST['cardType'];
//        $cardNo = $_POST['cardNO'];
//        $cardMonth = $_POST['cardValidity_month'];
//        $cardYear = $_POST['cardValidity_year'];
//        $cardHolderName = $_POST['cardHolderName'];

                $guest = new Guest((int)$guestId, $guestName, $guestNIC, $guestPhoneNo);
                $payment = null;


                $reservation = new Reservation((int)$reservationId, $checkInDate, $checkOutDate, (int)$noOfAdults, (int)$guestId, (float)$reservationFee, $guest, $roomDetail, $facilityDetail, $payment);
                echo $reservationBO->addReservation($reservation);
                break;

            case "cancelReservation":
                $id = $_POST['resId'];
                $reservationRepo = new ReservationBOImpl();
                echo $reservationRepo->updateStatus('canceled',((int)$id));
                break;
        }

        break;

}