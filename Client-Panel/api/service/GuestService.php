<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/5/2018
 * Time: 12:34 PM
 */


require_once __DIR__ . "/../business/impl/UserBOImpl.php";
require_once __DIR__ . "/../core/Guest.php";


$method = $_SERVER['REQUEST_METHOD'];

$userBO = new UserBOImpl();

switch ($method) {
    case "GET":
        $type = $_GET['type'];
        switch ($type) {
            case "loadUsers":
                echo json_encode($userBO->getAllUsers());
                break;
            case "searchByNic":
                echo json_encode($userBO->searchByNIC($_GET['nic']));
                break;
            case "searchGuest":
                echo json_encode($userBO->searchUser($_GET['id']));
                break;
        }

        break;
    case "POST":
        $type = $_POST['type'];
        switch ($type) {
            case "update" :
                $name = $_POST['guestNameText'];
                $nic = $_POST['guestNic'];
                $tele = $_POST['guestTeleNo'];
                $id = $_POST['id'];
                $user = new Guest($id,$name,$nic,$tele);
                echo $userBO->updateUser($user);
                break;
            case "delete":
                echo $userBO->deleteUser(((int)$_POST['id']));
                break;
        }
        break;
}