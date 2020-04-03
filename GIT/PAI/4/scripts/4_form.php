<?php
    if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['pass1']) && !empty($_POST['pass2']))
    {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];

        if ($pass1 != $pass2) {
            header('location: ../form.php?errorPass=');
        }
    
        echo <<<X
            Imię:  $name<br>
            Nazwisko: $surname<hr>
X;
    }
    else
    {
        // echo "wypełnij wszystkie dane';
        header('location: ../form.php?emptyData');
    }
?>