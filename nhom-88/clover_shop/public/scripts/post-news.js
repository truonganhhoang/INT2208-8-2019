$(document).ready(function () {
    $("#post").click(function () {
        if ($('#topic').val() == "" ||
            $('#content').val() == "VD: Hà Nội..." ||
            $('#price').val() == "Chọn một tùy chọn bất kì...." ||
            $('#nameOfSale').val() == "" ||
            $('#phoneNumber').val() == "" ||
            $('#EmailOfSale').val() == "") {

            alert("bạn cần hoàn thiện các thông tin bên dưới")
        }
        else {

            $("#post-box").css("display", "block");
        }
    });

    $("#cancle-post").click(function () {
        $("#post-box").css("display", "none");
    });

})
