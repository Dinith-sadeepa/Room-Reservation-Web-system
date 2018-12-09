<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../dist/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../dist/css/page.css">
    <link rel="stylesheet" href="../dist/css/header.css">
    <link rel="stylesheet" href="../dist/css/reservation-form.css">

    <link href="https://fonts.googleapis.com/css?family=Cinzel|Raleway:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

</head>

<body>
<!--<section class="main-content" >-->
<!--<div class=" jumbotron" id="roomDiv" style="position:relative">-->
<!--<form id="roomForm">-->
<!--&lt;!&ndash;<div class="form-group row">&ndash;&gt;-->
<!--&lt;!&ndash;<label for="roomId" class="col-sm-2 col-form-label">Room Id</label>&ndash;&gt;-->
<!--&lt;!&ndash;<div class="col-sm-10">&ndash;&gt;-->
<!--&lt;!&ndash;<input type="text" class="form-control" id="roomId" name="roomId" placeholder="Room Id">&ndash;&gt;-->
<!--&lt;!&ndash;</div>&ndash;&gt;-->
<!--&lt;!&ndash;</div>&ndash;&gt;-->
<!--<div class="form-group row">-->
<!--<label for="roomFloor" class="col-sm-2 col-form-label">Room Floor</label>-->
<!--<div class="col-sm-10">-->
<!--<input type="number" class="form-control" id="roomFloor" name="roomFloor" placeholder="Room Floor">-->
<!--</div>-->
<!--</div>-->
<!--<div class="form-group row">-->
<!--<label for="roomType" class="col-sm-2 col-form-label">Room Type</label>-->
<!--<div class="col-sm-10">-->
<!--<input type="text" class="form-control" id="roomType" name="roomType" placeholder="Room Type">-->
<!--</div>-->
<!--</div>-->
<!--<div class="form-group row">-->
<!--<label for="roomCategory" class="col-sm-2 col-form-label">Room Category</label>-->
<!--<div class="col-sm-10">-->
<!--<input type="text" class="form-control" id="roomCategory" name="roomCategory" placeholder="Room Category">-->
<!--</div>-->
<!--</div>-->
<!--<div class="form-group row">-->
<!--<label for="roomPrice" class="col-sm-2 col-form-label">Room Unit Price</label>-->
<!--<div class="col-sm-10">-->
<!--<input type="number" class="form-control" id="roomPrice" name="roomPrice" placeholder="Room Unit Price">-->
<!--</div>-->
<!--</div>-->
<!--<div class=" row">-->
<!--<div class="col-sm-2">-->
<!--<button type="button" class="btn btn-success" id="addRoomButton">Add Room</button>-->
<!--</div>-->
<!--<div class="col-sm-2">-->
<!--<button type="button" class="btn btn-info" id="updateRoomButton">Update Room</button>-->
<!--</div>-->
<!--<div class="col-sm-2">-->
<!--<button type="button" class="btn btn-danger" id="deleteRoomButton">Delete Room</button>-->
<!--</div>-->
<!--<div class="col-sm-1">-->
<!--<button type="button" class="btn btn-primary" id="loadRoomButton">Load Rooms</button>-->
<!--</div>-->
<!--</div>-->
<!--<table class="table table-hover" >-->
<!--<thead>-->
<!--<tr>-->
<!--<th scope="col">Room Id</th>-->
<!--<th scope="col">Room Type</th>-->
<!--<th scope="col">Room Category</th>-->
<!--<th scope="col">Room Floor</th>-->
<!--<th scope="col">Room Price</th>-->
<!--<th scope="col">Room Status</th>-->
<!--</tr>-->
<!--</thead>-->
<!--<tbody id="roomTable">-->
<!--</tbody>-->
<!--</table>-->
<!--</form>-->
<!--</div>-->

<!--<div class=" jumbotron" id="facilityDiv">-->
<!--<form id="facilityForm">-->
<!--&lt;!&ndash;<div class="form-group row">&ndash;&gt;-->
<!--&lt;!&ndash;<label for="facilityId" class="col-sm-2 col-form-label">Facility Id</label>&ndash;&gt;-->
<!--&lt;!&ndash;<div class="col-sm-10">&ndash;&gt;-->
<!--&lt;!&ndash;<input type="text" class="form-control" id="facilityId" name="facilityId" placeholder="Facility Id">&ndash;&gt;-->
<!--&lt;!&ndash;</div>&ndash;&gt;-->
<!--&lt;!&ndash;</div>&ndash;&gt;-->
<!--<div class="form-group row">-->
<!--<label for="facilityDescription" class="col-sm-2 col-form-label">Facility Description</label>-->
<!--<div class="col-sm-10">-->
<!--<input type="text" class="form-control" id="facilityDescription" name="facilityDescription" placeholder="Facility Description">-->
<!--</div>-->
<!--</div>-->
<!--<div class="form-group row">-->
<!--<label for="facilityPrice" class="col-sm-2 col-form-label">Facility Unit Price</label>-->
<!--<div class="col-sm-10">-->
<!--<input type="number" class="form-control" id="facilityPrice" name="facilityPrice" placeholder="Facility Unit Price">-->
<!--</div>-->
<!--</div>-->
<!--<div class=" row">-->
<!--<div class="col-sm-2">-->
<!--<button type="button" class="btn btn-success" id="addFacilityButton">Add Facility</button>-->
<!--</div>-->
<!--<div class="col-sm-2">-->
<!--<button type="button" class="btn btn-info" id="updateFacilityButton">Update Facility</button>-->
<!--</div>-->
<!--<div class="col-sm-2">-->
<!--<button type="button" class="btn btn-danger" id="deleteFacilityButton">Delete Facility</button>-->
<!--</div>-->
<!--<div class="col-sm-1">-->
<!--<button type="button" class="btn btn-primary" id="loadFacilityutton">Load Facilities</button>-->
<!--</div>-->
<!--</div>-->
<!--<table class="table table-hover" >-->
<!--<thead>-->
<!--<tr>-->
<!--<th scope="col">Facility Id</th>-->
<!--<th scope="col">Facility Description</th>-->
<!--<th scope="col">Facility Price</th>-->
<!--</tr>-->
<!--</thead>-->
<!--<tbody id="facilityTable">-->
<!--</tbody>-->
<!--</table>-->
<!--</form>-->
<!--</div>-->

<!--</section>-->

<nav class="main-navigation" id="nav_area">
    <div class="row" style="height: 100px; width: 100%;">
        <div class="col-md-1"></div>

        <div class="navbar-header animated fadeInUp">
            <a class="navbar-brand" href="#">
                <img src="../dist/img/Hotel-logo.png" alt="" width="300">
            </a>
        </div>
        <div class="col-md-1"></div>
        <ul class="nav-list col-md-7">
            <li class="nav-list-item">
                <a href="#reservation_Area" class="nav-link">
                    <button class="btn btn-outline-success nav-link">Depart Reservation</button>
                </a>
            </li>
            <li class="nav-list-item">
                <a href="#room_area" class="nav-link">Manage Rooms</a>
            </li>
            <li class="nav-list-item">
                <a href="#facility_area" class="nav-link">Manage Facilities</a>
            </li>
            <li class="nav-list-item">
                <a href="#reservation_area" class="nav-link">Reservations</a>
            </li>
        </ul>

        <!--<div class="col-md-1"></div>-->
    </div>
</nav>

<div class="row room-search" id="reservation_Area" style="margin: 0">
    <div class="jumbotron jumbotron-fluid"></div>
    <div class="container" style="width: 59%">
        <div id="accordion">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Depart Reservation</h2>
                    </div>
                </div>
            </div>

            <div class="card card-default">
                <div id="collapse1" class="collapse show">
                    <div class="card-body">
                        <form id="departRoomForm">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-2 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Reservation Id *</label>
                                        <input type="number" name="reservationIdText" id="reservationIdText"
                                               class="form-control"/>
                                    </div>
                                </div>

                                <div class="col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">NIC</label>
                                        <input type="text" name="guestNICText" id="guestNICText" class="form-control"
                                               disabled/>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <label class="control-label">Check In Date</label>
                                        <input type="text" name="checkInDate" id="checkInDateText" class="form-control"
                                               disabled/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8"></div>
                                <div class="col-md-2 col-lg-3">
                                    <div class="form-group">
                                        <input type="button" name="departButton" id="departButton"
                                               class="form-control btn btn-outline-success" value="Depart Now!">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row room-search" id="room_area" style="margin: 0">
    <div class="jumbotron jumbotron-fluid"></div>
    <div class="container" style="width: 59%">
        <div class="accordion">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Manage Rooms</h2>
                    </div>
                </div>
            </div>

            <div class="card card-default">
                <div class="collapse1" class="collapse show">
                    <div class="card-body">
                        <form id="roomForm">
                            <div class="form-group row">
                                <label for="roomFloor" class="col-sm-3 col-form-label">Room Floor</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="roomFloor" name="roomFloor"
                                           placeholder="Room Floor">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="roomType" class="col-sm-3 col-form-label">Room Type</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="roomType" name="roomType"
                                           placeholder="ac\non ac">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="roomCategory" class="col-sm-3 col-form-label">Room Category</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="roomCategory" name="roomCategory"
                                           placeholder="king\queen">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="roomPrice" class="col-sm-3 col-form-label">Room Unit Price</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="roomPrice" name="roomPrice"
                                           placeholder="Room Unit Price">
                                </div>
                            </div>

                            <div class=" row">
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-success" id="addRoomButton">Add Room</button>
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-info" id="updateRoomButton" disabled>Update
                                        Room
                                    </button>
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-danger" id="deleteRoomButton" disabled>Delete
                                        Room
                                    </button>
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-primary" id="loadRoomButton">Load Rooms
                                    </button>
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-primary" id="cancelRoomButton">Cancel
                                    </button>
                                </div>
                            </div>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">Room Id</th>
                                    <th scope="col">Room Type</th>
                                    <th scope="col">Room Category</th>
                                    <th scope="col">Room Floor</th>
                                    <th scope="col">Room Price</th>
                                    <th scope="col">Room Status</th>
                                </tr>
                                </thead>
                                <tbody id="roomTable">
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div class="row roomImageDiv" style="margin: 0; display: none">-->
<!--    <div class="jumbotron jumbotron-fluid"></div>-->
<!--    <div class="container" style="width: 59%">-->
<!--        <div class="accordion">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-12">-->
<!--                    <div class="text-center">-->
<!--                        <h2>Add Room Image</h2>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="card card-default">-->
<!--                <div class="collapse1" class="collapse show">-->
<!--                    <div class="card-body">-->
<!--                        <form action="imageUpload.php" method="post" enctype="multipart/form-data">-->
<!--                            <div class="form-group row">-->
<!--                                <label for="roomId" class="col-sm-3 col-form-label">Room Id</label>-->
<!--                                <div class="col-sm-8">-->
<!--                                    <input type="text" class="form-control btn" id="roomId"-->
<!--                                           name="roomId">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="form-group row">-->
<!--                                <label for="imageFile" class="col-sm-3 col-form-label">Select Image File</label>-->
<!--                                <div class="col-sm-8">-->
<!--                                    <input type="file" class="form-control btn" id="imageFile"-->
<!--                                           name="imageFile" placeholder="">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class=" row">-->
<!--                                <div class="col-md-2"></div>-->
<!--                                <div class="col-md-10">-->
<!--                                    <button type="submit" class="btn btn-success" name="addRoomImageButton"-->
<!--                                            id="addRoomImageButton">Add Image-->
<!--                                    </button>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="row room-search" id="facility_area" style="margin: 0">
    <div class="jumbotron jumbotron-fluid"></div>
    <div class="container" style="width: 59%">
        <div class="accordion">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Manage Facilities</h2>
                    </div>
                </div>
            </div>

            <div class="card card-default">
                <div class="collapse1" class="collapse show">
                    <div class="card-body">
                        <form id="facilityForm">
                            <div class="form-group row">
                                <label for="facilityDescription" class="col-sm-3 col-form-label">Facility
                                    Description</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="facilityDescription"
                                           name="facilityDescription" placeholder="Facility Description">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="facilityPrice" class="col-sm-3 col-form-label">Facility Unit Price</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="facilityPrice" name="facilityPrice"
                                           placeholder="Facility Unit Price">
                                </div>
                            </div>
                            <div class=" row">
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-success" id="addFacilityButton">Add Facility
                                    </button>
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-info" id="updateFacilityButton" disabled>Update
                                        Facility
                                    </button>
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-danger" id="deleteFacilityButton" disabled>
                                        Delete
                                        Facility
                                    </button>
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-primary" id="loadFacilityutton">Load
                                        Facilities
                                    </button>
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-primary" id="cancelFacilityButton">Cancel
                                    </button>
                                </div>
                            </div>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">Facility Id</th>
                                    <th scope="col">Facility Description</th>
                                    <th scope="col">Facility Price</th>
                                </tr>
                                </thead>
                                <tbody id="facilityTable">
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row room-search" style="margin: 0">
    <div class="jumbotron jumbotron-fluid"></div>
    <div class="container" style="width: 59%">
        <div class="accordion">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Manage Guests</h2>
                    </div>
                </div>
            </div>

            <div class="card card-default">
                <div class="collapse1" class="collapse show">
                    <div class="card-body">
                        <form id="guestForm">
                            <div class="form-group row">
                                <label for="guestNameText" class="col-sm-3 col-form-label">Guest Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="guestNameText"
                                           name="guestNameText" placeholder="Guest Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="guestNic" class="col-sm-3 col-form-label">Guest NIC</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="guestNic" name="guestNic"
                                           placeholder="Guest NIC">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="guestTeleNo" class="col-sm-3 col-form-label">Guest Telephone NO</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="guestTeleNo" name="guestTeleNo"
                                           placeholder="Guest Telephone NO">
                                </div>
                            </div>
                            <div class=" row">
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-info" id="updateGuestButton" disabled>Update
                                        Guest
                                    </button>
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-danger" id="deleteGuestButton" disabled>Delete
                                        Guest
                                    </button>
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-primary" id="loadGuestButton">Load
                                        Guest
                                    </button>
                                </div>
                                <div class="col-sm-1">
                                    <button type="button" class="btn btn-primary" id="cancelGuestButton">Cancel
                                    </button>
                                </div>
                            </div>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">Guest Id</th>
                                    <th scope="col">Guest Name</th>
                                    <th scope="col">Guest Nic</th>
                                    <th scope="col">Guest Telephone No</th>
                                </tr>
                                </thead>
                                <tbody id="guestTable">
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row room-search" id="reservation_area" style="margin: 0">
    <div class="jumbotron jumbotron-fluid"></div>
    <div class="container" style="width: 59%">
        <div class="accordion">
            <div class="row">
                <div class="col-md-9">
                    <div class="text-center">
                        <h2>View Reservations</h2>
                    </div>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-primary" id="loadReservation">Load Reservation details
                    </button>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="text-center col-md-12">
                    <h3>Reservation</h3>
                </div>
            </div>
            <div class="card card-default">
                <div class="collapse1" class="collapse show">
                    <div class="card-body">
                        <form id="resrevationForm">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">Reservation Id</th>
                                    <th scope="col">Check In Date</th>
                                    <th scope="col">Chack Out Date</th>
                                    <th scope="col">No OF Adulds</th>
                                    <th scope="col">User Id</th>
                                    <th scope="col">Reservation Fee</th>
                                </tr>
                                </thead>
                                <tbody id="reservationTable">
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card card-default">
                <div class="collapse1" class="collapse show">
                    <hr>
                    <div class="row">
                        <div class="text-center col-md-12">
                            <h3>Room Details</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="roomDetailForm">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">RoomDetail Id</th>
                                    <th scope="col">Room Id</th>
                                    <th scope="col">reservation Id</th>
                                    <th scope="col">price</th>
                                </tr>
                                </thead>
                                <tbody id="roomDetailTable">
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card card-default">
                <div class="collapse1" class="collapse show">
                    <hr>
                    <div class="row">
                        <div class="text-center col-md-12">
                            <h3>Facility Details</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="facilityDetailForm">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">FacilityDetail Id</th>
                                    <th scope="col">Facility Id</th>
                                    <th scope="col">reservation Id</th>
                                    <th scope="col">price</th>
                                </tr>
                                </thead>
                                <tbody id="facilityDetailTable">
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="top-button" style="position: fixed;
    bottom: 0;
    z-index: 50;
    right: 0;">
    <a href="#nav_area">
        <img src="../dist/img/slider/scroll-gif-13.gif" alt="" width="100">
    </a>
</div>


<script src="../dist/js/jquery-3.3.1.min.js"></script>
<script src="../dist/js/bootstrap/bootstrap.min.js"></script>
<script src="../dist/controller/AdminRoomController.js"></script>
<script src="../dist/controller/AdminFacilityController.js"></script>
<script src="../dist/controller/AdminDepartController.js"></script>
<script src="../dist/controller/AdminUserController.js"></script>
<script src="../dist/controller/AdminReservationController.js"></script>
<!---->
<!--<script>-->
<!--    $(document).ready(function () {-->
<!--        $('#addRoomImageButton').click(function () {-->
<!--            var image_name = $('#imageFile').val();-->
<!--            if (image_name === '') {-->
<!--                alert('please select a image');-->
<!--                return false;-->
<!--            } else {-->
<!--                var extension = $('#imageFile').val().split('.').pop().toLowerCase();-->
<!--                if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) === -1) {-->
<!--                    alert('invalid Image File');-->
<!--                    $('#imageFile').val('');-->
<!--                    $('#addRoomImageButton').css('display', 'none');-->
<!--                    return false;-->
<!--                }-->
<!--            }-->
<!---->
<!--        });-->
<!--    });-->
<!--</script>-->


</body>

</html>