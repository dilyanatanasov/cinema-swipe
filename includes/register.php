<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=cinema_swipe", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

if (!empty($_POST) && $_POST["data"]) {
    $result = $conn->query("SELECT id FROM users WHERE username = 'nikolay'");
    $user = $result->fetchAll();

    $liked = ($_POST["data"] === "right") ? 1 : 0;
    $cover_photo = "https://upload.wikimedia.org/wikipedia/en/thumb/3/39/Borat_ver2.jpg/220px-Borat_ver2.jpg";
    $sql = "INSERT INTO user_movies(`user_id`, `movie_id`, `like`) VALUES('{$user[0]['id']}', 1, '{$liked}')";
    $conn->exec($sql);
}


echo json_encode("updated");