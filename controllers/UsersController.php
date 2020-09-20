<?php
/**
 * Class UsersController
 */
class UsersController
{
    private $userRepository;

    private function __construct() {
        $this->userRepository = new UsersRepository();
    }
}