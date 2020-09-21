<?php

CONST DOMAIN = "localhost";
CONST USERNAME = "root";
CONST DB = "cinema_swipe";

/**
 * Base class for all repository classes
 */
class DB {
    // Holds the db connection
    public $db;

    /**
     * DB constructor. Initialize required properties
     */
    public function __construct() {
        $this->connect();
    }

    /**
     * Connect to databse
     */
    public function connect() {
        try {
            $this->db = new PDO("mysql:host=".DOMAIN.";dbname=".DB, USERNAME, "");
            // set the PDO error mode to exception
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}