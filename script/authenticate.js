const success = "Successfully registered!";
const error = "Username/Password problem!";
const credentials = "Wrong Credentials!";

const snackbarShow = (status) => {
    if (status === "success") {
        $("#snackbar").removeClass("hide").addClass("show");
        $("#snackbar").text(success);
        setTimeout(() => {
                $("#snackbar").removeClass("show").addClass("hide");
            }
            , 2000);
    } else if (status === "error") {
        $("#snackbar").removeClass("hide").addClass("showError");
        $("#snackbar").text(error);
        setTimeout(() => {
                $("#snackbar").removeClass("showError").addClass("hide");
            }
            , 2000);
    } else if (status === "credentials") {
        $("#snackbar").removeClass("hide").addClass("showError");
        $("#snackbar").text(credentials);
        setTimeout(() => {
                $("#snackbar").removeClass("showError").addClass("hide");
            }
            , 2000);
    }
}

$(document).ready(() => {
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get('status');
    if (status !== undefined) {
        snackbarShow(status)
    }
});