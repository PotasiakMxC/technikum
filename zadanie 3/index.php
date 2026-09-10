<?php
    // echo "testujemy ";

    // $zmienna = 5;

    // if($zmienna > 4){
    //     echo "zmienna większa niż 4 ";
    // }elseif($zmienna == 4){
    //     echo "zmienna jest równa 4 ";
    // }else{
    //     echo "zmienna jest mniejsza niż 4 ";
    // }

    // $kolor = "blue";

    // switch($kolor){
    //     case "red":
    //         echo "czerwony";
    //         break;
    //     case "blue":
    //         echo "niebieski";
    //         break;
    //     case "green":
    //         echo "zielony";
    //         break;
    //     case "yellow":
    //         echo "żółty";
    //         break;
    //     default:
    //         echo "kolor nie rozpozoznany lol :>";
    // }


    //zadanie 1
    $a = 1;
    $b = -5;
    $c = 6;

    $delta = $b**2 -4*$a*$c;


    if($delta > 0){
        echo "są dwa miejsca zerowe";
    }elseif($delta = 0){
        echo "jest jedno miejsce zerowe";
    }elseif($delta < 0){
        echo "zero miejst zerowych";
    }else{
        echo "coś";
    }
?>
