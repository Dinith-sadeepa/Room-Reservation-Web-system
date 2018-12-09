let facilityId;

$('#addFacilityButton').click(function () {
    let facilityForm = $('#facilityForm').serialize();
    $.ajax({
        url: "/playground/Hotel-Web/Client-Panel/api/service/FacilityService.php",
        method: "POST",
        async: true,
        data: facilityForm + "&type=" + "add"
    }).done(function (res) {
        if(res === '1'){
            alert("Added");
        }else{
            alert("NOT Added");
        }
    });
});

$('#updateFacilityButton').click(function () {
    let facilityForm = $('#facilityForm').serialize();
    $.ajax({
        url: "/playground/Hotel-Web/Client-Panel/api/service/FacilityService.php",
        method: "POST",
        async: true,
        data: facilityForm + "&type=" + "update" +"&id=" + facilityId
    }).done(function (res) {
        if(res === '1'){
            alert("Updated");
        }else{
            alert("NOT Updated");
        }
    });
});

$('#deleteFacilityButton').click(function () {
    $.ajax({
        url: "/playground/Hotel-Web/Client-Panel/api/service/FacilityService.php",
        method: "POST",
        async: true,
        data: "&type=" + "delete" +"&id=" + facilityId
    }).done(function (res) {
        if(res === '1'){
            alert("Deleted");
        }else{
            alert("NOT Deleted");
        }
    });
});


$('#loadFacilityutton').click(function () {
    $('#facilityTable').empty();
    $.ajax({
        url: "/playground/Hotel-Web/Client-Panel/api/service/FacilityService.php",
        method: "GET",
        async: true,
        dataType: "json"
    }).done(function (resp) {
        for (var i in resp){
            $temp = resp[i];
            $('#facilityTable').append("<tr> <td class='facilityId'>"+$temp[0]+"</td> <td class='facilityDescription'>"+$temp[1]+"</td> <td class='facilityPrice'>"+$temp[2]+"</td><td><input type='button' class='btn btn-primary get' value='Get Data'></td></tr>");
        }
        $('.get').click(function () {
            var facilityDescription = $(this).closest('tr').find('.facilityDescription').text();
            var facilityPrice = $(this).closest('tr').find('.facilityPrice').text();
            facilityId = $(this).closest('tr').find('.facilityId').text();

            document.getElementById('facilityDescription').setAttribute('value', facilityDescription);
            document.getElementById('facilityPrice').setAttribute('value', facilityPrice);
            document.getElementById('addFacilityButton').setAttribute('disabled', 'disabled');

            document.getElementById('updateFacilityButton').removeAttribute('disabled');
            document.getElementById('deleteFacilityButton').removeAttribute('disabled');
        });
    });


});

$('#cancelFacilityButton').click(function () {
    // document.getElementById('roomFloor').removeAttribute('value');
    // document.getElementById('roomType').removeAttribute('value');
    // document.getElementById('roomCategory').removeAttribute('value');
    // document.getElementById('roomPrice').removeAttribute('value');
    document.getElementById('addFacilityButton').removeAttribute('disabled');
    document.getElementById('updateFacilityButton').setAttribute('disabled', 'disabled');
    document.getElementById('deleteFacilityButton').setAttribute('disabled', 'disabled');
    // $('#roomFloor').value = '';
});
