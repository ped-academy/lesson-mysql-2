<?php

$username = 'root';
$password = 'root';

try {
    // db connection
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=ped-academy', $username, $password);
    $rows = $pdo->query('SELECT id, title, content from post');
    $items = $rows->fetchAll(PDO::FETCH_ASSOC);
    // fetch dei dati
    foreach ($items as $item) {
        echo $item['id'] . PHP_EOL;
        echo $item['title'] . PHP_EOL;
        echo $item['content'] . PHP_EOL;
        echo "--------------" . PHP_EOL;
    }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}