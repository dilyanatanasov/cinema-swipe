<?php
/**
 * Class UserFriendsController
 */
class UserFriendsController
{
    private $userFriendsRepository;
    private function __construct() {
        $this->userFriendsRepository = new UserFriendsRepository();
    }
}