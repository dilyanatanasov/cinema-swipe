$(document).ready(() => {
    let photos = [];
    let nextIndex = 1;

    $.ajax({
        url: "includes/getImages.php",
        async: true,
        type: "POST",
        data: status,
        success: (data) => {
            photos = JSON.parse(data);
            $(".cover").attr("src", photos[0].cover_photo);
            delete photos[0];
        },
        error: (errors) => {
            console.log(errors);
        }
    });

    const sendData = (status) => {
        $.ajax({
            url: "includes/register.php",
            async: true,
            type: "POST",
            data: status,
            success: (data) => {
            },
            error: (errors) => {
                console.log(errors);
            }
        });
    }

    const isMatch = (status) => {
        $.ajax({
            url: "includes/isMatch.php",
            async: true,
            type: "POST",
            data: status,
            success: (data) => {
                if (data) {
                    alert("You matched congrats");
                }
            },
            error: (errors) => {
                console.log(errors);
            }
        });
    }

    $(".movies").on("swiperight", () => {
        if (nextIndex < photos.length) {
            sendData({data: "right"});
            isMatch({user_one: 1, user_two: 2, movie_id: 1});
            $(".cover").attr("src", photos[nextIndex].cover_photo);
            nextIndex++;
        } else {
            $(".cover").attr("src", "https://64.media.tumblr.com/tumblr_m657g3JIph1qbzvbgo1_500.jpg");
            alert("No more photos");
        }
    });

    $(".movies img").on("swipeleft", () => {
        if (nextIndex < photos.length) {
            sendData({data: "left"});
            $(".cover").attr("src", photos[nextIndex].cover_photo);
            nextIndex++;
        } else {
            $(".cover").attr("src", "https://64.media.tumblr.com/tumblr_m657g3JIph1qbzvbgo1_500.jpg");
            alert("No more photos");
        }
    });
});