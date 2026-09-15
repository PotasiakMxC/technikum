<?php
    // // $a = 5;
    // // echo $a;
    // // echo "hello world: $a";

    // $b = "hello";
    // // $c = "world";
    // // echo $b.$c;

    // // $d = true;
    // // $e = 5.5;
    // var_dump($b);
    // $names = array("jakub", "jakub_pro", "jakub_deluxe");
    // //var_dump($names);
    // $array = array("dodge", 15);
    // echo count($names);
    // echo $names[0];
    // $b = "hello";
    // echo  substr($b,3);
    // define("zmienna", "XD");
    // echo zmienna



    $a = 12;

    if($a%2 == 0){
        echo("liczba parzysta <br>");
    }else{
        echo("liczba nie parzysta <br>");
    }

    $b = 9;
    $c = 2;
    if($b%$c == 0){
        echo("liczba podzielna przez drugą <br>");
    }else{
        echo("liczba nie dzili sie przez drugą <br>");
    }

    $d =21;

    if($d >= 1 && $d <=10){
        echo("liczba jest w przedziale 1-10 <br>");
    }else if($d >= 17 && $d <=21){
        echo("liczba jest w przedziale 17-21 <br>");
    }else{
        echo("nie jest w żadnym znanym przedziale! <br>");
    }

    $e = 1;

    if($e > 0){
        echo("liczba większa od zera <br>");
    }else if($e < 0){
        echo("mniejsza od zera <br>");
    }else{
        echo("równa zeru <br>");
    }

    $wiek = 18;
    if($wiek <= 11){
        echo("dziecko <br>");
    }else if($wiek > 11 && $wiek <= 17){
        echo("nastolatek <br>");
    }else{
        echo("dorosły <br>");
    }
?>

