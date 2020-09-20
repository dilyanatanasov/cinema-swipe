<?php
require_once "DB.php";
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
    public function get($where)
    {
        $result = $this->db->query("SELECT 
                                        id 
                                    FROM 
                                        users 
                                    WHERE " . $where);
        return $result->fetchAll();
    }
}