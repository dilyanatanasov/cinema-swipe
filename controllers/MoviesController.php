<?php
/**
 * Class MoviesController
 */
class MoviesController
{
    private $moviesRepository;

    private function __construct() {
        $this->moviesRepository = new MoviesRepository();
    }
}