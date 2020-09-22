<?php
require_once "../repositories/UserFriendsRepository.php";

class FriendsApi {
    /**
     * Retrieve all users
     */
    public function getAllFriends() {
        if (!empty($_POST) && $_POST["user_id"]) {
            $id = json_decode($_POST["user_id"]);

            $user = new UserFriendsRepository();
            $sql = "SELECT
                        U.id,
                        U.username
                    FROM
                        users U
                    INNER JOIN
                        user_friends UF ON UF.user_one = U.id || UF.user_two = U.id
                    WHERE
                        U.id <> '{$id}'
                    GROUP BY U.username";
            return $user->custom($sql);
        } else {
            return 0;
        }
    }
}

$api = new FriendsApi();
echo json_encode($api->getAllFriends());