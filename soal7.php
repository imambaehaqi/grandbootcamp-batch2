<?php
    $database = 'mysql:host=localhost;dbname=batch2';
    try {
        $databaseN = new PDO($database, 'joomla', 'kopi');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    $table = $databaseN->prepare("SELECT hobbies.person_id, categories.name, GROUP_CONCAT(' ', hobbies.name) as person_hobbies FROM hobbies INNER JOIN categories ON categories.id = hobbies.person_id GROUP BY hobbies.person_id;");
    $table->execute();
    $data = $table->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Soal No.7</title>
        <link rel="stylesheet" href="http://localhost/soal7/css/bootstrap.css">
    </head>
    <body>
        <div class="container text-center">
        <h1 class="mt-3">Relasi tabel categories dan tabel hobbies</h1>
        <hr>
        <table class="table table-bordered table-striped mt-5">
            <tr>
                <th>Person ID</th>
                <th>Name</th>
                <th>Person Hobbies</th>
            </tr>
            <?php foreach ($data as $d) : ?>
            <tr>
                <td><?= $d['person_id']; ?></td>
                <td><?= $d['name']; ?></td>
                <td><?= $d['person_hobbies']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="http://localhost/arkademy/soal7/js/bootstrap.js"></script>
    </body>
</html>