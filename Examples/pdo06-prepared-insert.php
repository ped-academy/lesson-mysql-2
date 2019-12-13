<?php

// insert
try {

    $username = 'root';
    $password = 'root';

    $title = 'Insert Query';
    $content = 'This is a prepared statement inser query!';

    $pdo = new PDO('mysql:host=127.0.0.1;dbname=ped-academy;charset=utf8', $username, $password);

    // 1.preparare lo statement SQL
    $statement = $pdo->prepare("INSERT INTO post (title, content, creation_date) VALUES (:title, :content, NOW())");

    // 2.binding dei parametri
    $statement->bindParam(':title', $title);
    $statement->bindParam(':content', $content);

    // 3.esecuzione della query
    $statement->execute();
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}