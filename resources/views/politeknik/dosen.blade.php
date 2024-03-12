<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Dosen</h1>
    <ol>
       <?php
        foreach ($dosen as $name) {
            echo "<li> $name </li>";
        }
        ?>
    </ol>
</body>
</html>