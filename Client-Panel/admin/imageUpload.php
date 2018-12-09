<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/6/2018
 * Time: 8:56 PM
 */

session_start();
//$roomId = $_POST['roomId'];
//echo '<script>console.log(roomId)</script>';


$connect = mysqli_connect("127.0.0.1","root","1234","roombookingproject");
if(isset($_POST["addRoomImageButton"])){
    $imge = addslashes(file_get_contents($_FILES["imageFile"]["tmp_name"]));
//    $query = "INSERT INTO roomImage(roomId,image) VALUES ($roomId,'$imge')";
    echo '<script>console.log("jjjj")</script>';

//    if(mysqli_query($connect,$query)){
//        echo '<script>console.log("jjjj123123123")</script>';
//        echo '<script>alert("Image Added")</script>';
//    }else{
//        echo '<script>console.log("00000")</script>';
//    }

    $responce = mysqli_query($connect,"INSERT INTO roomImage(image) VALUES ('$imge')");
    if($responce >0){
        echo "Added";
    }else{
        echo "Not Added";
    }

}