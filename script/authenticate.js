const snackbarShow = (content) => {
    console.log(content);
    if (content === "success") {
        $("#snackbar").removeClass("hide").addClass("show");
        $("#snackbar").text(content);
        setTimeout((x) => {
                $("#snackbar").removeClass("show").addClass("hide");
            }
            , 2000);
    } else if (content === "error") {
        $("#snackbar").removeClass("hide").addClass("showError");
        $("#snackbar").text(content);
        setTimeout((x) => {
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