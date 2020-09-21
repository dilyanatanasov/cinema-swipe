<?php
require_once dirname(dirname(__FILE__)). "/core/DB.php";
/**
 * Class UserMoviesRepository
 */
class UserMoviesRepository extends DB{
    /**
     * Retrieve all records from user_movies
     * @return mixed
     */
    public function getAll(){
        $result = $this->db->query("SELECT * FROM user_movies");
        return $result->fetchAll();
    }

    /**
     * Retrieve specific records from user_movies by providing a where clause
     * @param $where
     * @return mixed
     */
    public function get($where){
        $result = $this->db->query("SELECT 
                                        * 
                                    FROM 
                                        user_movies 
                                    WHERE " . $where);
        return $result->fetchAll();
    }

    /**
     * Add new record into user_movies table
     * @param $user_id String
     * @param $movie_id String
     * @param $like Int
     * @return mixed
     */
    public function add($user_id, $movie_id, $like) {
        $sql = "INSERT INTO user_movies(`user_id`, `movie_id`, `like`) VALUES('{$user_id}', '{$movie_id}', {$like})";
        return $this->db->exec($sql);
    }
}