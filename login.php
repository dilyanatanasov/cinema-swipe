<?php
session_start();
require_once __DIR__ . "/controllers/Authorization.php";

if (!empty($_POST) && !empty($_POST["username"] && !empty($_POST["password"]))) {
    $authorize = new Authorization();
    $authorize->login($_POST["username"], $_POST["password"]);
} elseif (!empty($_POST) && !empty($_POST["logout"])){
    $authorize = new Authorization();
    $authorize->logout();
}

?>

<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="login">
        <form method="POST" action="login.php">
            <label>Username</label>
            <input type="text" name="username">
            <label>Password</label>
            <input type="password" name="password">
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
