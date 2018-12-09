

$('#loadReservation').click(function () {
    $('#reservationTable').empty();
    $.ajax({
        url: "/playground/Hotel-Web/Client-Panel/api/service/ReservationService.php",
        method: "GET",
        async: true,
        dataType: "json",
        data: "&type=" + "loadReservations",
        complete: function (e) {
            loadRoomDetails();
        }
    }).done(function (resp) {
        for (var i in resp) {
            var temp = resp[i];
            if(temp[6] == 'on going'){
                $('#reservationTable').append(
                    "<tr> <td class='resId' >" + temp[0] + "</td> <td >" + temp[1] + "</td><td>" + temp[2] + "</td> <td>" + temp[3] + "</td><td>" + temp[4] + "</td><td>" + temp[5] + "</td><td><input type='button' class='btn btn-primary cancel-reservation' value='Cancel'></td></tr>"
                );
            }else{
                $('#reservationTable').append(
                    "<tr> <td >" + temp[0] + "</td> <td >" + temp[1] + "</td><td>" + temp[2] + "</td> <td>" + temp[3] + "</td><td>" + temp[4] + "</td><td>" + temp[5] + "</td><td><input type='button' class='btn btn-primary get' value='Cancel' disabled></td></tr>"
                );
            }
        }
        $('.cancel-reservation').click(function () {
            var resId = $(this).closest('tr').find('.resId').text();

            $.ajax({
                url: "/playground/Hotel-Web/Client-Panel/api/service/ReservationService.php",
                method: "POST",
                async: true,
                data: "&type=" + "cancelReservation" + "&resId=" + resId,
                complete: function (e) {
                    getRoomId(resId);
                }

            }).done(function (resp) {
                if(resp === '1'){
                    alert("Canceled")
                }else{
                    alert("Cancel goes wrong")
                }
            });
        });
    });
});

function getRoomId(resId) {
    $.ajax({
        url: "/playground/Hotel-Web/Client-Panel/api/service/RoomDetailService.php",
        method: "GET",
        dataType: "json",
        data: "&id=" + resId + "&type=" + "searchByReservationId"
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




function loadRoomDetails() {
    $('#roomDetailTable').empty();
    $.ajax({
        url: "/playground/Hotel-Web/Client-Panel/api/service/RoomDetailService.php",
        method: "GET",
        async: true,
        dataType: "json",
        data: "&type=" + "getAll",
        complete: function (e) {
            loadFacilityDetail();
        }
    }).done(function (resp) {
        for (var i in resp) {
            var temp = resp[i];
            $('#roomDetailTable').append(
                "<tr> <td >" + temp[0] + "</td> <td >" + temp[1] + "</td><td>" + temp[2] + "</td> <td>" + temp[3] + "</td></tr>"
            );
        }
    });
}

function loadFacilityDetail() {
    $('#facilityDetailTable').empty();
    $.ajax({
        url: "/playground/Hotel-Web/Client-Panel/api/service/FacilityDetailService.php",
        method: "GET",
        async: true,
        dataType: "json"
    }).done(function (resp) {
        for (var i in resp) {
            var temp = resp[i];
            $('#facilityDetailTable').append(
                "<tr> <td >" + temp[0] + "</td> <td >" + temp[1] + "</td><td>" + temp[2] + "</td> <td>" + temp[3] + "</td></tr>"
            );
        }
    });
}
