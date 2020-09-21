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
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
    <div class="movies">
        <p class="title"></p>
        <img class="cover">
    </div>
    <form method="POST" action="login.php">
        <button name="logout" value="logout">Logout</button>
    </form>
    <script type="application/javascript" src="script/match.js">
    </script>
</body>
</html>
