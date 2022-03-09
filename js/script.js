  // Add and show files

  $(document).ready(function () {
    $("#btnSubmit").click(function (event) {
        event.preventDefault();
        var form = $('#myform')[0];
        var data = new FormData(form);
        data.append("send", "yes");
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "/src/upload.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 800000,
            success: function (data) {
                $("#image").html(data);
                $("#file").val('');
            },
            error: function (e) {
                console.log("ERROR : ", e);
            }
        }); 
    });
});


// Remove files
$(document).ready(function () {
    $("#delete").click(function (event) {
        event.preventDefault();
        var formDelete = $('#removeForm')[0];
        var data = new FormData(formDelete);
        data.append("delete", "yes");

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "/src/delete_file.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 800000,
            success: function (data) {
                $("#image").html(data);
            },
            error: function (e) {
                console.log("ERROR : ", e);
                $("#delete").prop("disabled", false);
            }
        }); 
    });
});

$(document).ready(function () {
    $("#deleteAll").click(function (event) {
        event.preventDefault();
        var formDelete = $('#removeForm')[0];
        var data = new FormData(formDelete);
        data.append("deleteAll", "yes");

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "/src/deleteAll_file.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 800000,
            success: function (data) {
                $("#image").html(data);
            },
            error: function (e) {
                console.log("ERROR : ", e);
                $("#deleteAll").prop("disabled", false);
            }
        }); 
    });
});