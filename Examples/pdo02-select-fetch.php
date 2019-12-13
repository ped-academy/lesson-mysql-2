<?php

$username = 'root';
$password = 'root';

try {
    // db connection
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=ped-academy', $username, $password);
    $rows = $pdo->query('SELECT id, title from post');
    // fetch dei dati row by row
    while ($item = $rows->fetch()) {
        echo "ID: " . $item['id'] . PHP_EOL;
        echo "Title: " . $item['title'] . PHP_EOL;
    }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}