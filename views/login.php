<?php
echo '<html>
<head>
    <title>Welcome</title>
    <link rel="icon" href="resources/cinema-swipe-thumb.png">
    <link rel="stylesheet" type="text/css" href="css/authenticate.css">
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
    <div class="main">
        <p class="sign" align="center">Welcome</p>
        <form class="form1" method="POST" action="login.php">
        <input class="un " type="text" name="username" align="center" placeholder="Username">
        <input class="pass" type="password" name="password" align="center" placeholder="Password">
        <button class="submit" align="center">Sign in</button>
        <p class="forgot" align="center"><a href="register.php">No Registration?</p>
    </div>
    <div id="snackbar" class="hide"></div>
    <script type="application/javascript" src="script/authenticate.js"></script>
</body>
</html>';