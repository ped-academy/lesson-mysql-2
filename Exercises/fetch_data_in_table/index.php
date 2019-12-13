<?php

    $username = 'root';
    $password = 'root';
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=ped-academy', $username, $password);
    $rows = $dbh->query('SELECT id, title, content from post');
    $items = $rows->fetchAll(PDO::FETCH_ASSOC);

?>
<html>
    <head>
        <title>Demo Fetch</title>
        <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    </head>
    <body>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>content</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item) { ?>
                <tr>
                    <td><?php echo $item['id']; ?></td>
                    <td><?php echo $item['title']; ?></td>
                    <td><?php echo $item['content']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>