<?php
require_once dirname(dirname(__FILE__)). "/core/DB.php";
/**
 * Class MoviesRepository
 */
class MoviesRepository extends DB
{
    /**
     * Retrieve all records from movies table
     */
    public function getAll() {
        $result = $this->db->query("SELECT * FROM movies");
        return $result->fetchAll();
    }
}