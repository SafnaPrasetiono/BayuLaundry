$("#sliderButton").click(function (event) {
    if ($("#sliderExample").hasClass("active")) {
        $("#sliderExample").removeClass("active");
        $("#sliderBackground").removeClass("active");
    } else {
        $("#sliderExample").addClass("active");
        $("#sliderBackground").addClass("active");
    }
});
$("#sliderBackground").click(function () {
    $("#sliderExample").removeClass("active");
    $("#sliderBackground").removeClass("active");
});

$("#LogOut").click(() => {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to logout!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, logout!",
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = '/admin/logout';
        }
    });
});
