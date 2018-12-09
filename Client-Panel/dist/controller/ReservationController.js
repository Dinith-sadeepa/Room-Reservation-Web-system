let selectAll = [];
let selectedRoom = [];
let selectedFacility = [];

let reservationFee = 0;
let userId;
let reserId = 0;
$('#searchroom').click(function () {
    // var checkInDate = $('#checkInDateText');
    // var checkOutDate = $('#checkOutDateText');
    // var noOfAdults = $('#noOfAdultsText');

    // if ($.trim(checkInDate.val()) == '' ) {
    // alert("something is wrong!");
    // } else {
    let searchRoomForm = $('#searchRoomForm').serialize();
    $.ajax({
        url: "/playground/Hotel-Web/Client-Panel/api/service/RoomService.php",
        method: "GET",
        async: true,
        dataType: "json",
        data: searchRoomForm + "&type=" + "ReservationSearch",
        complete: function (e) {
            requestLoadFacilities();
        }
    }).done(function (resp) {
        if (isEmpty(resp)) {
            alert('Rooms Not Available');
        } else {
            $('.check-rooms').fadeToggle();
            let noOfRooms = document.getElementById('noOfRoomsComboBox').value;
            let value = 0;


            $('#searchRoomCard').empty();
            for (var i in resp) {
                let buttonId = "reserveButon-" + i;
                let serviceId = "servicePanel-" + i;
                let doneButtonId = "doneButton-" + i;
                let liId = "li" + i;


                var temp = resp[i];

                $('#searchRoomCard').append(
                    '<li id=' + liId + '>\n' +
                    '            <div class="card" style="width: 18rem;">\n' +
                    '                <img class="card-img-top" src="dist/img/slider/3.jpeg" alt="Card image cap">\n' +
                    '                <div class="card-body">\n' +
                    '                    <div class="row card-title">\n' +
                    '                        <h3>Room Id : <span class="roomId">' + temp[0] + '</span></h3>\n' +
                    '                    </div>\n' +
                    '                    <br>\n' +
                    '                    <h3>Room Category : ' + temp[2] + '</h3>\n' +
                    '                    <h3 >Room Type : ' + temp[1] + '</h3>\n' +
                    '                    <h3 class="card-text">Room Floor : ' + temp[3] + '</h3>\n' +
                    '                    <h3 class="card-title">Room Price : ' + temp[4] + '</h3>\n' +
                    '                    <button class="btn btn-outline-success" style="margin-left: 60px;" id=' + buttonId + '>Reserve Room\n' +
                    '                    </button>\n' +
                    '                </div>\n' +
                    '\n' +
                    '\n' +
                    '            </div>\n' +
                    '            <!--service table-->\n' +
                    '\n' +
                    '            <div class="container service-panel" id=' + serviceId + '>\n' +
                    '                <div class="row col-md-6 col-md-offset-2 custyle">\n' +
                    '                    <table class="table table-striped custab">\n' +
                    '                        <thead>\n' +
                    '                        <tr>\n' +
                    '                            <th>ID</th>\n' +
                    '                            <th>Description</th>\n' +
                    '                            <th>Price</th>\n' +
                    '                            <th class="text-center">Select</th>\n' +
                    '                        </tr>\n' +
                    '                        </thead>\n' +
                    '                        <tbody class="serviceTable"></tbody>\n' +
                    '                    </table>\n' +
                    '                    <button class="btn btn-outline-success" style="margin-left: 60px;" id=' + doneButtonId + '>Done\n' +
                    '                    </button>\n' +
                    '                </div>\n' +
                    '            </div>\n' +
                    '        </li>'
                );

                $('#' + buttonId).click(function () {

                    var split = buttonId.split("-");
                    let po = split[1];
                    let pos = parseInt(po);

                    if (value + "" >= noOfRooms) {
                        alert('You Cant add More Rooms');
                    } else {
                        // selectedRoom.push(new Array($('#searchRoomCard li:nth-child(' + pos + ') .roomId').text()));
                        temp2 = resp[pos];
                        reservationFee = reservationFee + parseFloat(temp2[4]);

                        selectedRoom.push(new Array(temp2[0], temp2[1], temp2[2], temp2[3], temp2[4], temp2[5]));
                        // console.log(selectedRoom[0][0],selectedRoom[0][1],selectedRoom[0][2]);
                        $('#' + serviceId).css('display', 'block');
                    }
                    value++;
                });
                $('#' + doneButtonId).click(function () {
                    // let do1 =  $('.serviceTable tr td').has('input[type=checkbox]:checked').find('.facilityId');
                    // console.log(do1);

                    $('.serviceTable input:checked').each(function () {
                        var id, description, price;
                        id = $(this).closest('tr').find('.facilityId').html();
                        description = $(this).closest('tr').find('.facilityDescription').html();
                        price = $(this).closest('tr').find('.facilityPrice').html();
                        reservationFee = reservationFee + parseFloat(price);
                        selectedFacility.push(new Array(id, description, price));
                    });

                    selectAll.push(selectedRoom, selectedFacility);
                    // console.log(selectedFacility[0][0],selectedFacility[0][1],selectedFacility[0][2]);
                    alert('Room Booked!');
                    $('#' + serviceId).css('display', 'none');
                });
            }
        }
    });
    // }
});

function isEmpty(obj) {
    for (var key in obj) {
        if (obj.hasOwnProperty(key))
            return false;
    }
    return true;
}

function requestLoadFacilities() {
    $('.serviceTable').empty();
    $.ajax({
        url: "/playground/Hotel-Web/Client-Panel/api/service/FacilityService.php",
        method: "GET",
        async: true,
        dataType: "json"
    }).done(function (resp) {
        for (var i in resp) {
            $temp = resp[i];
            $('.serviceTable').append("<tr> <td class='facilityId'>" + $temp[0] + "</td> <td class='facilityDescription'>" + $temp[1] + "</td> <td class='facilityPrice'>" + $temp[2] + "</td> <td class='checkBoxSelect'> <input type='checkbox' value='select'> </td></tr>");
        }
    });
}


$('#confirmBookingButton').click(function () {
    var nameValidate = new RegExp(/[A-z].[^0-9<>?/!@#$%^&*()_+=]+/);
    var name = $('#guestNameText').val();

    if (!nameValidate.test(name)) {
        alert('Name is invalid');
        $('#guestNameText').focus();
    } else {
        $.ajax({
            url: "/playground/Hotel-Web/Client-Panel/api/service/ReservationService.php",
            method: "GET",
            async: true,
            dataType: "json",
            data: "&type=" + "loadReservations",
            complete: function (e) {
                makeReservation();
            }
        }).done(function (resp) {
            if (isEmpty(resp)) {
                reserId = 1;
            } else {
                for (var i in resp) {
                    let temp4 = resp[i];
                    reserId = parseInt(temp4[0]) + 1;
                }
            }
        });
    }
});


function makeReservation() {
    let reservetionInfo = $('#reservationDetails').serialize();
    let searchInfo = $('#searchRoomForm').serialize();

    $.ajax({
        url: "/playground/Hotel-Web/Client-Panel/api/service/ReservationService.php",
        method: "POST",
        async: true,
        data: reservetionInfo + "&" + searchInfo + "&selectedRoom=" + selectedRoom + "&selectedFacility=" + selectedFacility + "&reservationFee=" + reservationFee + "&reservationId=" + reserId + "&userId=" + userId + "&type=" +"addReservation"
    }).done(function (resp) {
        if(resp === '1'){
            alert("Reservation Done!");
        }else{
            alert("Reservation got wrong!")
        }
    });
}

$('#guestNICText').keyup(function (eve) {
    if (eve.keyCode === 13) {
        var nicVali = new RegExp(/[0-9]{9}[vV]/);
        var nic = $('#guestNICText').val();
        // if (nic === '') {
        //     alert('NIC cant be empty!');
        // } else {
        if (!nicVali.test(nic)) {
            alert('Invalid nic');
        } else {
            $.ajax({
                url: "/playground/Hotel-Web/Client-Panel/api/service/GuestService.php",
                method: "GET",
                async: true,
                dataType: "json",
                data: "&type=" + "loadUsers",
                success: function (e) {
                    requestSearchNic();
                }
            }).done(function (resp) {
                if (isEmpty(resp)) {
                    userId = 1;

                    document.getElementById('guestNameText').removeAttribute('disabled');
                    document.getElementById('guestAddressText').removeAttribute('disabled');
                    document.getElementById('guestEMailText').removeAttribute('disabled');
                    document.getElementById('guestPhoneNoText').removeAttribute('disabled');
                    $('#guestNameText').focus();
                } else {
                    for (var i in resp) {
                        let temp3 = resp[i];
                        userId = parseInt(temp3[0]) + 1;
                    }
                    document.getElementById('guestNameText').removeAttribute('disabled');
                    document.getElementById('guestAddressText').removeAttribute('disabled');
                    document.getElementById('guestEMailText').removeAttribute('disabled');
                    document.getElementById('guestPhoneNoText').removeAttribute('disabled');
                    $('#guestNameText').focus();
                }
            });
        }
    }
    // }
});

function requestSearchNic() {
    let nic = $('#guestNICText').val();
    $.ajax({
        url: "/playground/Hotel-Web/Client-Panel/api/service/GuestService.php",
        method: "GET",
        async: true,
        dataType: "json",
        data: "&type=" + "searchByNic" + "&nic=" + nic
    }).done(function (resp) {
        if (!isEmpty(resp)) {
            for (var i in resp) {
                userId = resp[i][0];
                document.getElementById('guestNameText').setAttribute('value', resp[i][1]);
                document.getElementById('guestPhoneNoText').setAttribute('value', resp[i][3]);

                document.getElementById('guestAddressText').removeAttribute('disabled');
                document.getElementById('guestEMailText').removeAttribute('disabled');
                $('#guestAddressText').focus();
            }
        }
    });
}

$('#guestAddressText').keyup(function (eve) {
    if (eve.keyCode === 13) {
        $('#guestEMailText').focus();
    }
});

$('#guestEMailText').keyup(function (eve) {
    if (eve.keyCode === 13) {
        $('#guestPhoneNoText').focus();
    }
});

$('#guestNameText').keyup(function (eve) {
    if (eve.keyCode === 13) {
        $('#guestAddressText').focus();
    }
});