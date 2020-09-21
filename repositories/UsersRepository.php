<?php
require_once dirname(dirname(__FILE__)). "/core/DB.php";

/**
 * Class UsersRepository
 */
class UsersRepository extends DB
{
    /**
     * Retrieve all records from users table
     * @return mixed
     */
    public function getAll()
    {
        $result = $this->db->query("SELECT * FROM users");
        return $result->fetchAll();
    }

    /**
     * Return records with filtered results
     * @param $where
     * @return mixed
     */
    public function get($where){
        $result = $this->db->query("SELECT 
                                        id,
                                        username,
                                        password
                                    FROM 
                                        users 
                                    WHERE " . $where);
        return $result->fetchAll();
    }

    /**
     * Add new user
     * @param $username
     * @param $password
     * @return mixed
     */
    public function add($username, $password){
        $sql = "INSERT INTO users(`username`, `password`) VALUES('{$username}', '{$password}')";
        return $this->db->exec($sql);
    }
}