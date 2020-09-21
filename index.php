<?php
session_start();
if (empty($_SESSION["user-status"])) {
    header("Location: login.php");
}

?>

<html>
<head>
    <title>Cinema Swipe</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script>
        // Stop loading screen
        jQuery(document).on("mobileinit", function () {
            jQuery.mobile.autoInitializePage = false;
        })
    </script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<div class="topnav">
    <a class="logo">Cinema Swipe</a>

    <form method="POST" action="login.php" class="logout">
        <input type="submit" name="logout" value="logout">
    </form>
</div>

<div class="movies">
    <p class="title"></p>
    <img class="cover">
</div>

<div id="snackbar" class="hide"></div>
<script type="application/javascript" src="script/match.js"></script>
</body>
</html>
