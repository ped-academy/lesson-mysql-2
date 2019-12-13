<?php

// connect + select using (prepared statements)
try {

    $username = 'root';
    $password = 'root';
    $id = 1;

    $pdo = new PDO('mysql:host=127.0.0.1;dbname=ped-academy;charset=utf8', $username, $password);

    // 1.preparare lo statement SQL
    $statement = $pdo->prepare("SELECT id, title, content FROM post WHERE id=:id");

    // 2.binding dei parametri
    $statement->bindParam(':id', $id);

    // 3.esecuzione della query
    $statement->execute();

    // 4.fetch dei dati
    $items = $statement->fetchAll();
    foreach ($items as $item) {
        echo $item['id'] . PHP_EOL;
        echo $item['title'] . PHP_EOL;
        echo $item['content'] . PHP_EOL;
    }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}