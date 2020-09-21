<?php
require_once __DIR__ . "/core/Authentication.php";

if (!empty($_POST) && !empty($_POST["username"] && !empty($_POST["password"]))) {
    $authorize = new Authentication();
    $result = $authorize->register($_POST["username"], $_POST["password"]);
    if (!$result) {
        header("Location: register.php?status=error");
    } else {
        header("Location: login.php?status=success");
    }
}

require_once "views/register.php";
