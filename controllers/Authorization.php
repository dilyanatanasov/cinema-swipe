<?php

require_once "/opt/lampp/htdocs/cineme-swipe/db/UsersRepository.php";
/**
 * Class Authorization
 */
class Authorization {
    public function login($username, $password) {
        $user = new UsersRepository();
        $where = "username = '{$username}' && password = '$password'";
        $result = $user->get($where);
        print_r($result);
        if ($result) {
            $_SESSION["user-status"] = 1;
            header("Location: index.php");
        } else {
            header('Location: '.$_SERVER['REQUEST_URI']);
        }
    }

    public function logout() {
        $_SESSION["user-status"] = 0;
        session_destroy();
        header('Location: '.$_SERVER['REQUEST_URI']);
    }
}