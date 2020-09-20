<?php
/**
 * Class UserMoviesController
 */
class UserMoviesController
{
    private $userMoviesRepository;
    private function __construct() {
        $this->userMoviesRepository = new UserMoviesRepository();
    }
}