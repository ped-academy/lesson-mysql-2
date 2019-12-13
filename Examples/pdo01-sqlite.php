<?php

$username = 'root';
$password = 'root';

try {
    // db connection
    $pdo = new PDO('mysql:host=localhost;dbname=ped-academy', $username, $password);
    //$pdo = new PDO('sqlite:/Users/sergiosicari/ped-academy.db');
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