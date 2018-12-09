let guestId;

$('#updateGuestButton').click(function () {
    let guestForm = $('#guestForm').serialize();
    $.ajax({
        url: "/playground/Hotel-Web/Client-Panel/api/service/GuestService.php",
        method: "POST",
        async: true,
        data: guestForm + "&type=" + "update" +"&id=" + guestId
    }).done(function (res) {
        if(res === '1'){
            alert("Updated");
        }else{
            alert("NOT Updated");
        }
    });
});

$('#deleteGuestButton').click(function () {
    $.ajax({
        url: "/playground/Hotel-Web/Client-Panel/api/service/GuestService.php",
        method: "POST",
        async: true,
        data: "&type=" + "delete" +"&id=" + guestId
    }).done(function (res) {
        if(res === '1'){
            alert("Deleted");
        }else{
            alert("NOT Deleted");
        }
    });
});

$('#loadGuestButton').click(function () {
    $('#guestTable').empty();
    $.ajax({
        url: "/playground/Hotel-Web/Client-Panel/api/service/GuestService.php",
        method: "GET",
        async: true,
        dataType: "json",
        data: "&type=" + "loadUsers"
    }).done(function (resp) {
        for (var i in resp) {
            $temp = resp[i];
            $('#guestTable').append("<tr> <td class='guestId'>" + $temp[0] + "</td> <td class='guestName'>" + $temp[1] + "</td> <td class='guestNic'>" + $temp[2] + "</td><td class='GuestTelephoneNo'>" + $temp[3] + "</td><td><input type='button' class='btn btn-primary get' value='Get Data'></td>/tr>");
        }
        $('.get').click(function () {
            var guestName = $(this).closest('tr').find('.guestName').text();
            var guestNic = $(this).closest('tr').find('.guestNic').text();
            var guestTelephoneNo = $(this).closest('tr').find('.GuestTelephoneNo').text();

            guestId = $(this).closest('tr').find('.guestId').text();


            document.getElementById('guestNameText').setAttribute('value', guestName);
            document.getElementById('guestNic').setAttribute('value', guestNic);
            document.getElementById('guestTeleNo').setAttribute('value', guestTelephoneNo);

            document.getElementById('updateGuestButton').removeAttribute('disabled');
            document.getElementById('deleteGuestButton').removeAttribute('disabled');
        });
    });
});

$('#cancelGuestButton').click(function () {
    document.getElementById('updateGuestButton').setAttribute('disabled', 'disabled');
    document.getElementById('deleteGuestButton').setAttribute('disabled', 'disabled');
});
