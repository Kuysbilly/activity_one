<?php 



$database = 'userregistration'; // Correct database name
$username = 'root'; // Your MySQL username
$password = ''; // Your MySQL password


try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

