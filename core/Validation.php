<?php

require_once "/opt/lampp/htdocs/cineme-swipe/repositories/UsersRepository.php";
/**
 * Class Validation
 */
class Validation {
    /**
     * @param $username
     * @param $password
     * @return int
     */
    public function validateRegistration($username, $password) {
        if ($this->validatePassword($password) && $this->usernameIsFree($username)) {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * @param $password
     * @return int
     */
    private function validatePassword($password) {
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);

        if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * @param $username
     * @return int
     */
    private function usernameIsFree($username) {
        $user = new UsersRepository();
        $where = " username = '{$username}'";
        $result = $user->get($where);
        if (empty($result)) {
            return true;
        } else {
            return false;
        }
    }
}