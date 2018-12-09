let useId;
let checkInDate;
let userNIC;
let reservaid;

$('#reservationIdText').keyup(function (eve) {
    reservaid = $('#reservationIdText').val();

    if (eve.keyCode === 13) {
        $.ajax({
            url: "/playground/Hotel-Web/Client-Panel/api/service/DepartingService.php",
            method: "GET",
            dataType: "json",
            data: "&id=" + reservaid + "&type=" + "searchDepartByResId"
        }).done(function (resp) {
            if (isEmpty(resp)) {
                searchReservation(reservaid);
            } else {
                alert('User Is Already Departed!')
            }
        });
    }
});

function searchUsers(useId) {
    $.ajax({
        url: "/playground/Hotel-Web/Client-Panel/api/service/GuestService.php",
        method: "GET",
        dataType: "json",
        data: "&id=" + useId + "&type=" + "searchGuest"
    }).done(function (resp) {

        for (var i in resp) {
            var temp = resp[i];
            userNIC = temp[2];
            document.getElementById('guestNICText').setAttribute('value', userNIC);
            document.getElementById('checkInDateText').setAttribute('value', checkInDate)
        }

    });
}

function emptyRows() {
    $('input[type = text]').removeAttr('value')
}

function isEmpty(obj) {
    for (var key in obj) {
        if (obj.hasOwnProperty(key))
            return false;
    }
    return true;
}


function searchReservation(resId) {
    $.ajax({
        url: "/playground/Hotel-Web/Client-Panel/api/service/ReservationService.php",
        method: "GET",
        dataType: "json",
        data: "&id=" + resId + "&type=" + "searchReservation",
        complete: function (e) {
            searchUsers(useId);
        }
    }).done(function (resp) {
        if (isEmpty(resp)) {
            alert('There is no such Reservation :' + resId);
        } else {
            for (var i in resp) {
                var temp = resp[i];
                useId = temp[4];
                checkInDate = temp[1];
                // let checkInDate = temp[1];
            }
        }
    });
}


$('#departButton').click(function () {
    let departForm = $('#departRoomForm');
    var disabled = departForm.find(':input:disabled').removeAttr('disabled');
    let serialized = departForm.serialize();
    $.ajax({
        url: "/playground/Hotel-Web/Client-Panel/api/service/DepartingService.php",
        method: "POST",
        data: serialized,
        complete: function (e) {
            getRoomId();
        }
    }).done(function (resp) {
        if(resp === '1'){
            alert("Departed");
        }else{
            alert("NOT Departed");
        }
        emptyRows();
    });

    disabled.attr('disabled', 'disabled');
});


function getRoomId() {
    $.ajax({
        url: "/playground/Hotel-Web/Client-Panel/api/service/RoomDetailService.php",
        method: "GET",
        dataType: "json",
        data: "&id=" + reservaid + "&type=" + "searchByReservationId"
    }).done(function (resp) {
        for (var i in resp) {
            var temp = resp[i];
            loadRoomId(temp);
        }
    });
}

function loadRoomId(tempElement) {
    $.ajax({
        url: "/playground/Hotel-Web/Client-Panel/api/service/RoomService.php",
        method: "POST",
        data: "&roomDetail=" + tempElement + "&type=" + "updateStatus"
    }).done(function (resp) {
        // console.log("updated");
    });
}
