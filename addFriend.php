<?php
session_start();
if (empty($_SESSION["user-status"])) {
    header("Location: login.php");
}

$user_id = $_SESSION["user-id"];
?>

<html>
<head>
    <title>Cinema Swipe</title>
    <link rel="icon" href="resources/cinema-swipe-thumb.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script>
        // Stop loading screen
        jQuery(document).on("mobileinit", function () {
            jQuery.mobile.autoInitializePage = false;
        })
        const loggedUserId = <?php echo $user_id ?>;
    </script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<?php
require_once "views/navigation.php";
require_once "views/friends.php";
?>

<div id="snackbar" class="hide"></div>
<script type="application/javascript" src="script/match.js"></script>
</body>
</html>
