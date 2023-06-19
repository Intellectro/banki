window.addEventListener("load", showAlert);

function showAlert() {
    setTimeout(() => {
        swal("An OTP was sent to your email", "", "success");
    }, 2000);
}
