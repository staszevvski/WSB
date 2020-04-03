<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularze</title>
</head>
<body>
    <h3>Formularz rejestracji</h3>
    <?php
        if(isset($_GET['errorPass'])) {
            echo "Podane hasła są różne<br>";
        }
        if (isset($_GET['emptyData'])) {
            echo "Wypełnij wszystkie dane<br>";
        }
    ?>
    <form method="post" action="./scripts/4_form.php">
        <input type="text" name="name" placeholder="Imię" autofocus autocomplete="off"><br>
        <input type="text" name="surname" placeholder="Nazwisko"><br>
        <input type="password" name="pass1" placeholder="Hasło"><br>
        <input type="password" name="pass2" placeholder="Podaj ponownie hasło"><br>
        <input type="radio" name="gender" value="k" checked>Kobieta<br>
        <input type="radio" name="gender" value="m">Mężczyzna<br>
        <input type="submit" value="Wyslij formularz">
    </form> 
</body>
</html>