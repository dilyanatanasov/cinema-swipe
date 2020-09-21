<?php
require_once "DB.php";
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