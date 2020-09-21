<?php
require_once "../repositories/MoviesRepository.php";

/**
 * Class AreFriendsApi
 */
class GetMoviesApi {
    public function getMovies() {
        $movies = new MoviesRepository();
        return $movies->getAll();
    }
}

$api = new GetMoviesApi();
echo json_encode($api->getMovies());