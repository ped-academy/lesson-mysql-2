<?php

$username = 'root';
$password = 'root';

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=ped-academy', $username, $password);

    $title = 'ciao';
    $content = 'ciao questo è un testo di prova';

    // 1.preparare lo statement SQL
    $statement = $pdo->prepare("INSERT INTO post (title, content, creation_date) VALUES (:title, :content, NOW())");

    // 2.binding dei parametri
    $statement->bindParam(':title', $title);
    $statement->bindParam(':content', $content);

    // 3.esecuzione della query
    $statement->execute();

    // 4.return last inserted id
    $lastId = $pdo->lastInsertId();

    echo $lastId;
} catch (\Exception $e) {
    var_dump($e);
}
