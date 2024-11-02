$(document).ready(function () {
    $(".name-val").keypress(function (e) {
        var key = e.keyCode;
        if (key >= 48 && key <= 57) {
            e.preventDefault();
        }
    });
});

$(document).ready(function () {
    $("body").bind("paste", function (e) {
        e.preventDefault();
    });
});
