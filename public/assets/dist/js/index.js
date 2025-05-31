$(".LogOut").click(() => {
    Swal.fire({
        title: "Anda yakin?",
        text: "Apakah kamu yakin untuk keluar applikasi!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, Keluar!",
        cancelButtonText: "Batalkan",
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "/user/logout";
        }
    });
});

window.addEventListener("success", (event) => {
    Swal.fire({
        icon: "success",
        title: "success!",
        text: event.detail,
        timer: 2000,
    });
});
window.addEventListener("erros", (event) => {
    Swal.fire({
        icon: "error",
        title: "Failed!",
        text: event.detail,
        timer: 2000,
    });
});
window.addEventListener("info", (event) => {
    Swal.fire({
        icon: "info",
        title: "Info!",
        text: event.detail,
        timer: 2000,
    });
});
