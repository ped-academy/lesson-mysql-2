<?php

$pdo = new PDO('mysql:host=127.0.0.1;dbname=ped-academy', 'root', 'root');
$query = <<<EOT
    UPDATE post 
    SET    
        title = 'update with exec',
        content = 'this is a test using exec function to update a row to db'
    WHERE  id = 46; 
EOT;

$count = $pdo->exec($query);
echo 'rows inserted are: ' . $count;
