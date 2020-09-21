<?php
session_start();
require_once __DIR__ . "/controllers/Authorization.php";

if (!empty($_POST) && !empty($_POST["username"] && !empty($_POST["password"]))) {
    $authorize = new Authorization();
    $authorize->login($_POST["username"], $_POST["password"]);
} elseif (!empty($_POST) && !empty($_POST["logout"])) {
    $authorize = new Authorization();
    $authorize->logout();
}
?>

<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <div class="main">
        <p class="sign" align="center">Sign in</p>
        <form class="form1" method="POST" action="login.php">
        <input class="un " type="text" name="username" align="center" placeholder="Username">
        <input class="pass" type="password" name="password" align="center" placeholder="Password">
        <button class="submit" align="center">Sign in</button>
        <p class="forgot" align="center"><a href="#">No Registration?</p>
    </div>
</body>
</html>
