<?php

$username = 'root';
$password = 'root';

try {
    // db connection
    $pdo = new PDO('mysql:host=localhost;dbname=ped-academy', $username, $password);
    echo "db connection established" . PHP_EOL;
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage() . PHP_EOL;
    die();
}
