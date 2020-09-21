<?php
session_start();
require_once __DIR__ . "/core/Authentication.php";

if (!empty($_POST) && !empty($_POST["username"] && !empty($_POST["password"]))) {
    $authorize = new Authentication();
    $authorize->login($_POST["username"], $_POST["password"]);
} elseif (!empty($_POST) && !empty($_POST["logout"])) {
    $authorize = new Authentication();
    $authorize->logout();
}

require_once "views/login.php";