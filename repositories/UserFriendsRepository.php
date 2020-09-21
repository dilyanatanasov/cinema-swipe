<?php
require_once dirname(dirname(__FILE__)). "/core/DB.php";
/**
 * Class UserFriendsRepository
 */
class UserFriendsRepository extends DB
{
    /**
     * Retrieve all records from user_friends table
     * @return mixed
     */
    public function getAll() {
        $result = $this->db->query("SELECT * FROM user_friends");
        return $result->fetchAll();
    }

    /**
     * Retrieve all records from user_friends table
     * @param $where
     * @return mixed
     */
    public function get($where) {
        $result = $this->db->query("SELECT 
                                        *
                                    FROM 
                                        user_friends 
                                    WHERE " . $where);
        return $result->fetchAll();
    }

    /**
     * @param $sql
     * @return mixed
     */
    public function custom($sql) {
        $result = $this->db->query($sql);
        return $result->fetchAll();
    }
}