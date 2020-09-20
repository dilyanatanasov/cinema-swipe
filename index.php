<?php

?>

<html>
<head>
    <title>Cinema Swipe</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<div class="movies">
    <img class="cover">
</div>

<script>
    $(document).ready(() => {
        const sendData = (status) => {
            $.ajax({
                url: "includes/register.php",
                async: true,
                type: "POST",
                data: status,
                success: (data) => {
                    console.log(data);
                },
                error: (errors) => {
                    console.log(errors);
                }
            });
        }

        $(".cover").attr("src","https://cdn.britannica.com/36/198336-050-A9B8AA86/Chadwick-Boseman-Tchalla-Black-Panther-Black.jpg");
        $(".movies").on("swiperight", () => {
            sendData({data: "Swipe right!"});
        });
        $(".movies img").on("swipeleft", () => {
            sendData({data: "Swipe left!"});
        });
    });
</script>
</body>
</html>
