<?php
require_once "../repositories/UserMoviesRepository.php";

/**
 * Class AreFriendsApi
 */
class IsMatchApi {
    public function isMatch() {
        if (!empty($_POST) && !empty($_POST["user_one"]) && !empty($_POST["user_two"]) && !$_POST["movie_id"]) {
            $where = "WHERE 
                        user_id = '{$_POST["user_one"]}' OR '{$_POST["user_two"]}'
                        AND movie_id = {$_POST["movie_id"]}
                        AND `like` = 1
                        LIMIT 1";
            $userMovies = new UserMoviesRepository();
            $result = $userMovies->get($where);
            return (!empty($result)) ? 1 : 0;
        } else {
            return 0;
        }
    }
}

$api = new IsMatchApi();
echo json_encode($api->isMatch());