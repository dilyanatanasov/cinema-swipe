const registerSwipe = (registrationData) => {
    $.ajax({
        url: "api/registerSwipe.php",
        async: true,
        type: "POST",
        data: registrationData,
        error: (errors) => {
            console.log(errors);
        }
    });
}

const isMatch = (status) => {
    $.ajax({
        url: "api/isMatch.php",
        async: true,
        type: "POST",
        data: status,
        success: (data) => {
            if (data) {
                snackbarShow("You've matched!");
            }
        },
        error: (errors) => {
            console.log(errors);
        }
    });
}

const endOfLine = () => {
    const errorImage = "https://64.media.tumblr.com/tumblr_m657g3JIph1qbzvbgo1_500.jpg";
    $(".cover").attr("src", errorImage);
    $(".title").html(`<p class='title'>Come later for more</p>`);
    snackbarShow("No more photos");
}

const snackbarShow = (content) => {
    $("#snackbar").removeClass("hide").addClass("show");
    $("#snackbar").text(content);
    setTimeout((x) => {
            $("#snackbar").removeClass("show").addClass("hide");
        }
        , 1000);
}

$(document).ready(() => {
    $.mobile.autoInitializePage = false;
    let photos = [];
    let nextIndex = 1;

    $.ajax({
        url: "api/getMovies.php",
        async: true,
        type: "POST",
        data: status,
        success: (data) => {
            photos = JSON.parse(data);
            $(".title").html(`<p class='title'>${photos[0].name}</p>`);
            $(".cover").attr("src", photos[0].cover_photo);
            delete photos[0];
        },
        error: (errors) => {
            console.log(errors);
        }
    });

    $(".movies").on("swiperight", () => {
        if (nextIndex < photos.length) {
            registerSwipe({user_id: 1, movie_id: 1, like: 1});
            isMatch({user_one: 1, user_two: 2, movie_id: 1});
            $(".cover").attr("src", photos[nextIndex].cover_photo);
            $(".title").html(`<p class='title'>${photos[nextIndex].name}</p>`);
            nextIndex++;
        } else {
            endOfLine();
        }
    });

    $(".movies img").on("swipeleft", () => {
        if (nextIndex < photos.length) {
            registerSwipe({user_id: 1, movie_id: 1, like: 0});
            $(".title").html(`<p class='title'>${photos[nextIndex].name}</p>`);
            $(".cover").attr("src", photos[nextIndex].cover_photo);
            nextIndex++;
        } else {
            endOfLine();
        }
    });
});