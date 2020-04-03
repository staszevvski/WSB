<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "text<br>";
        $name="JAnusz";
        $surname="Kowalski";
        
        echo $name." ".$surname,"<br>";
        echo $name." ".$surname,"<br>";
        
        echo "name $surname";
        echo 'name $surname';

        //heredoc
        echo <<<SHOW
        <hr>
            imię: $name<br>
            Nazwisko: $surname
        <hr>
SHOW;

        $text= <<<SHOW
        <hr>
            imię: $name<br>
            Nazwisko: $surname
        <hr>
SHOW;
    echo $text;

    $potega=2**10;
	echo $potega,"<br>";

//systemy liczbowe
$int=10;
$hex=0xA;
$oct=012; //2*8^0+1*8^1 = 10
$bin=0b1011; //11(10)

echo $int,"<br>"; //10
echo $hex,"<br>"; //10
echo $oct,"<br>"; //10
echo $bin,"<br>"; //11

//echo phpinfo();

//operatory bitowe
	$x=0b1010;
	echo $x; //10
	$x=$x>>1;
	echo $x; //5
	
	$x=$x<<2;
	echo $x; //20
	
// rowne / identyczne
	$x=1;
    $y=1.0;
    
    if ($x==$y)
    {
    echo "Rowne<br>";
    }
    else
    {
    echo "rozne<br>";
    }

    // nieidentyczne

    if ($x===$y)
    {
    echo "identczne<br>";
    }
    else
    {
    echo "nieidentyczne<br>";
    }

    echo gettype ($x) ; //integer
    echo gettype ($y),"<hr>" ; //double

    // operatory rzutaowania dancyh

    $text="123ssd";
    $x=(int)$text;
    echo $x; //123
    echo gettype($x),"<br>"; //integer

    $text=0;
    $x=(bool)$text;
    echo "\$text: $text";
    echo "\$x: $x";

    $text=10;
    $x=(unset)$text;
    echo "\$x: $x";

    echo gettype($text); //integer
    echo gettype($x); //null

    // rozmiar typu integer

    echo PHP_INT_SIZE; //8
    echo PHP_INT_MIN,"<br>";
    echo PHP_INT_MAX, "<br>";

    //kontrola typu zmiennych
    $x=10;
    echo is_int($x); //1
    echo is_string($x); //
    echo is_bool($x); //
    echo is_float($x); //
    echo is_null($x), "<br>"; //

    //operator ignorowania bkledu
    $w;
    echo @$w;
    echo "asd";
    echo @gettype($w); //NULL
// zmienne superglobalne
//$_ GET, $_post, $_cookie, $_files $_session, $_Server
// formularze ciasteczka przesyłanie pliki server

//echo $_SERVER['SERVER_PORT']; //80
////e/cho $_SERVER['SERVER_NAME']; //127 localhost
//echo $_SERVER['SCRIPT_NAME']; //
//echo $_SERVER['DOKUMENT_ROOT']; //c:\xammp
//htdocs

//$fileLocal = $_SERVER['DOKUMENT_ROOT'];
//$fileLocal .= $_SERVER['SCRIPT_NAME'];

echo $fileLocal,"<br>";

//stałę nazwa stałej z duzej litery
define("NAME", "Janusz");
echo NAME;

define("surnamE", "Kowal", true);
echo surname, "<br>";

//stałę predefiniowane
echo PHP_VERSION;
echo PHP_OS;
echo __LINE__; //151
echo __FILE__; //scoezka pliku
echo __DIR__; //drzewo katalogu bez nazwy pliku


    ?>

</body>
</html>
