<?php

$username = 'root';
$password = 'root';

try {
    // db connection
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=ped-academy', $username, $password);
    $rows = $pdo->query('SELECT id, title from post');
    $items = $rows->fetchAll(PDO::FETCH_ASSOC);
    print_r($items);
    $rows = $pdo->query('SELECT id, title from post');
    $items = $rows->fetchAll(PDO::FETCH_NUM);
    print_r($items);
    $rows = $pdo->query('SELECT id, title from post');
    $items = $rows->fetchAll(PDO::FETCH_BOTH);
    print_r($items);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}