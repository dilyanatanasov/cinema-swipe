<?php
require_once "../db/UsersRepository.php";
/**
 * Class RegisterSwipeApi
 */
class RegisterSwipeApi {
    public function registerSwipe () {
        if (!empty($_POST) && $_POST["data"]) {
            $parsedUserInput = json_decode($_POST["data"]);

            $username = $parsedUserInput["user_id"];
            $user = new UsersRepository();
            $where = "username = '$username'";
            $result = $user->get($where);

            $like = $parsedUserInput["like"];
            $movieId = $parsedUserInput["like"];

            $userMovies = new UserMoviesRepository();
            return $userMovies->add($result["id"], $movieId, $like);
        } else {
            return "Error saving";
        }
    }
}

$api = new RegisterSwipeApi();
echo json_encode($api->registerSwipe());