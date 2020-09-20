<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=cinema_swipe", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

if (!empty($_POST)) {
    if (!empty($_POST["user_one"]) && !empty($_POST["user_two"])) {
        $result = $conn->query("SELECT 
                                            * 
                                        FROM user_movies 
                                        WHERE 
                                            user_id = '{$_POST["user_one"]}' OR '{$_POST["user_two"]}'
                                            AND movie_id = {$_POST["movie_id"]}
                                            AND `like` = 1
                                            LIMIT 1");
        $test = $result->fetchAll();
        if (!empty($test)) {
            echo 1;
        } else {
            echo 0;
        }
    }
}