<?php
require_once "../db/MoviesRepository.php";

/**
 * Class AreFriendsApi
 */
class GetMovies {
    public function getMovies() {
        $movies = new MoviesRepository();
        return $movies->getAll();
    }
}

$api = new GetMovies();
echo json_encode($api->getMovies());