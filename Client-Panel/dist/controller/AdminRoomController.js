let roomId;

$('#addRoomButton').click(function () {
    let roomForm = $('#roomForm').serialize();
    $.ajax({
        url: "/playground/Hotel-Web/Client-Panel/api/service/RoomService.php",
        method: "POST",
        async: true,
        data: roomForm + "&type=" + "add",
        complete: function (e) {
            // loadRoomImageForm();
        }
    }).done(function (res) {
        if(res === '1'){
            alert("Added");
            $('#roomFloor').value = '';
            // document.getElementById('roomType').removeAttribute('value');
            // document.getElementById('roomCategory').removeAttribute('value');
            // document.getElementById('roomPrice').removeAttribute('value');
        }else{
            alert("NOT Added");
        }
    });
});

function loadRoomImageForm() {
    $('.roomImageDiv').css('display', 'block');
    $('#roomId').val('');

    $.ajax({
        url: "/playground/Hotel-Web/Client-Panel/api/service/RoomService.php",
        method: "GET",
        dataType:"json",
        async: true,
        data: "&type=" + "loadRooms"
    }).done(function (res) {
        let lastRoomId;
        for (var i in res) {
            var temp = res[i];
            lastRoomId = temp[0];
        }

        $('#roomId').val(lastRoomId);
    });

}


$('#updateRoomButton').click(function () {
    let roomForm = $('#roomForm').serialize();
    $.ajax({
        url: "/playground/Hotel-Web/Client-Panel/api/service/RoomService.php",
        method: "POST",
        async: true,
        data: roomForm + "&type=" + "update" + "&id=" + roomId
    }).done(function (res) {
        if(res === '1'){
            alert("Updated");
            // /$('#roomFloor').value = '';
            // document.getElementById('roomType').removeAttribute('value');
            // document.getElementById('roomCategory').removeAttribute('value');
            // document.getElementById('roomPrice').removeAttribute('value');
        }else{
            alert("NOT Updated");
        }
    });
});

$('#deleteRoomButton').click(function () {
    $.ajax({
        url: "/playground/Hotel-Web/Client-Panel/api/service/RoomService.php",
        method: "POST",
        async: true,
        data: "&type=" + "delete" + "&id=" + roomId
    }).done(function (res) {
        if(res === '1'){
            alert("Deleted");
            // /$('#roomFloor').value = '';
            // document.getElementById('roomType').removeAttribute('value');
            // document.getElementById('roomCategory').removeAttribute('value');
            // document.getElementById('roomPrice').removeAttribute('value');
        }else{
            alert("NOT Deleted");
        }
    });
});

$('#loadRoomButton').click(function () {
    $('#roomTable').empty();
    $.ajax({
        url: "/playground/Hotel-Web/Client-Panel/api/service/RoomService.php",
        method: "GET",
        async: true,
        dataType: "json",
        data: {
            type: "loadRooms"
        }
    }).done(function (resp) {
        for (var i in resp) {
            $temp = resp[i];
            $('#roomTable').append("<tr> <td class='roomId'>" + $temp[0] + "</td> <td class='roomType'>" + $temp[1] + "</td> <td class='roomCategory'>" + $temp[2] + "</td><td class='roomFloor'>" + $temp[3] + "</td><td class='roomPrice'>" + $temp[4] + "</td><td>" + $temp[5] + "</td><td><input type='button' class='btn btn-primary get' value='Get Data'></td>/tr>");
        }
        $('.get').click(function () {
            var roomType = $(this).closest('tr').find('.roomType').text();
            var roomCategory = $(this).closest('tr').find('.roomCategory').text();
            var roomFloor = $(this).closest('tr').find('.roomFloor').text();
            var roomPrice = $(this).closest('tr').find('.roomPrice').text();

            roomId = $(this).closest('tr').find('.roomId').text();


            document.getElementById('roomFloor').setAttribute('value', roomFloor);
            document.getElementById('roomType').setAttribute('value', roomType);
            document.getElementById('roomCategory').setAttribute('value', roomCategory);
            document.getElementById('roomPrice').setAttribute('value', roomPrice);
            document.getElementById('addRoomButton').setAttribute('disabled', 'disabled');

            document.getElementById('updateRoomButton').removeAttribute('disabled');
            document.getElementById('deleteRoomButton').removeAttribute('disabled');
        });
    });
});

$('#cancelRoomButton').click(function () {
    // document.getElementById('roomFloor').removeAttribute('value');
    // document.getElementById('roomType').removeAttribute('value');
    // document.getElementById('roomCategory').removeAttribute('value');
    // document.getElementById('roomPrice').removeAttribute('value');
    document.getElementById('addRoomButton').removeAttribute('disabled');
    document.getElementById('updateRoomButton').setAttribute('disabled', 'disabled');
    document.getElementById('deleteRoomButton').setAttribute('disabled', 'disabled');
    // $('#roomFloor').value = '';
});

$('#roomFloor').keyup(function (eve) {
    if (eve.keyCode === 13) {
        $('#roomType').focus();
    }
});
$('#roomType').keyup(function (eve) {
    if (eve.keyCode === 13) {
        $('#roomCategory').focus();
    }
});
$('#roomCategory').keyup(function (eve) {
    if (eve.keyCode === 13) {
        $('#roomPrice').focus();
    }
});


$('#facilityDescription').keyup(function (eve) {
    if (eve.keyCode === 13) {
        $('#facilityPrice').focus();
    }
});

$('#guestNameText').keyup(function (eve) {
    if (eve.keyCode === 13) {
        $('#guestNic').focus();
    }
});
$('#guestNic').keyup(function (eve) {
    if (eve.keyCode === 13) {
        $('#guestTeleNo').focus();
    }
});