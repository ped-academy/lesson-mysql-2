<?php

$pdo = new PDO('mysql:host=127.0.0.1;dbname=ped-academy', 'root', 'root');
$query = <<<EOT
    DELETE FROM post
    WHERE id=46;
EOT;

$count = $pdo->exec($query);
echo 'rows deleted are: ' . $count;