<?php

    //zadanie 15
    for($i = 0; $i <= 1000; $i++){
        if($i%3 == 0 && $i%7 == 0){
            echo $i;
        }else{
            echo " ";
        }
    }
    echo "<br>";echo "<br>";echo "<br>";echo "<br>";

    //zadanie 16
    for($i = 0; $i <= 100; $i++){
        if($i%3 == 0){
            echo " ";
        }else{
            echo $i . " ";
        }
    }

echo "<br>";echo "<br>";echo "<br>";echo "<br>";
    //zadanie 17

    $a = 30;
    if($a % 3 != 0){
        $a += 3 - ($a % 3);
    }
    for($i = 0; $i <20;$i++){
        echo $a . " ";
        $a += 3;
    }

echo "<br>";echo "<br>";echo "<br>";echo "<br>";
    //zadanie 18

    $b = 5;
    for($i = 0; $i <= 100; $i++){
        if($i % $b == 0){
            echo $i;
        }else{
            echo " ";
        }
    }


echo "<br>";echo "<br>";echo "<br>";echo "<br>";
    //tablica mnożenia
    for($i = 0; $i <= 100; $i++){
        if($i % 10 == 0){
            echo $i . " " . "<br>";
        }else{
            echo $i . " ";
        }
    }




    echo "<br>";echo "<br>";echo "<br>";echo "<br>";
    //szachownica

    $a = 2;
    $b =3;
    for($i = 0; $i <= 100; $i++){
        if($i % $a ==0){
            echo "X";
        }else{
            echo "O";
        }
        
        if($i%10 == 0){
            echo "<br>";
        }else{
            echo " ";
        }
    }
?>