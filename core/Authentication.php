<?php

require_once "/opt/lampp/htdocs/cineme-swipe/repositories/UsersRepository.php";
require_once "Validation.php";

/**
 * Class Authentication
 */
class Authentication {
    /**
     * Manage login
     * @param $username
     * @param $password
     */
    public function login($username, $password) {
        $user = new UsersRepository();
        $where = "username = '{$username}' && password = '{$password}'";
        $result = $user->get($where);
        if ($result) {
            $_SESSION["user-status"] = 1;
            $_SESSION["user-id"] = $result[0]["id"];
            $_SESSION["user-username"] = $result[0]["username"];
            header("Location: index.php");
        } else {
            header('Location: '.$_SERVER['REQUEST_URI']);
        }
    }

    /**
     * Manage logout
     */
    public function logout() {
        $_SESSION["user-status"] = 0;
        $_SESSION["user-id"] = "";
        $_SESSION["user-username"] = "";
        session_destroy();
        header('Location: '.$_SERVER['REQUEST_URI']);
    }

    /**
     * Check registration params for already existing username or password
     * @param $username
     * @param $password
     * @return int|mixed
     */
    public function register($username, $password) {
        $validator = new Validation();
        if (!$validator->validateRegistration($username, $password)) {
            return 0;
        }

        $user = new UsersRepository();
        return $user->add($username, $password);
    }
}
