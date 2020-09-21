<?php
require_once "../repositories/UsersRepository.php";

class PossibleFriendsApi {
    /**
     * Retrieve all users
     */
    public function getAllPossibleFriends() {
        if (!empty($_POST) && $_POST["user_id"]) {
            $id = json_decode($_POST["user_id"]);

            $user = new UsersRepository();
            $where = " id != '{$id}'";
            return $user->get($where);
        } else {
            return 0;
        }
    }
}

$api = new PossibleFriendsApi();
echo json_encode($api->getAllPossibleFriends());