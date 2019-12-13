<?php

$pdo = new PDO('mysql:host=localhost;dbname=ped-academy', 'root', 'root');
$query = <<<EOT
    INSERT INTO post (
        title, 
        content, 
        creation_date)
        VALUES (
            'insert with exec',
            'this is a test using exec function to insert a row to db',
            NOW()
            )
EOT;

$count = $pdo->exec($query);
echo 'rows inserted are: ' . $count;
