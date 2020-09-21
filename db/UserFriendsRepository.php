<?php
require_once "DB.php";
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
}