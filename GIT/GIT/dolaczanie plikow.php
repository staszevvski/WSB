<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>plik główny</h3>
        <?php
            include './3_1_file.php';
            include './3_1_file.php';

            require_once './3_1_file.php';
        ?>

<h3>koniec plik główny</h3> 
</body>
</html>