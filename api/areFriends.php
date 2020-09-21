<?php
require_once "../repositories/UserFriendsRepository.php";

/**
 * Class AreFriendsApi
 */
class AreFriendsApi {
    public function areFiends() {
        $userFriends = new UserFriendsRepository();
        return $userFriends->getAll();
    }
}

$api = new AreFriendsApi();
echo json_encode($api->areFiends());