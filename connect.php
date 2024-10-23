<?php

$db_name = 'mysql:host=localhost;port=3308;dbname=shopdb';
$user_name = 'root';
$user_password = '';

try {
    $conn = new PDO($db_name, $user_name, $user_password); 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>