<?php

$array = [1,2,3,4,5];
$array2 = [6,7,8,9,10];

printArray($array);
printArray($array2);
echo sumNumbers(6);
echo "<br>";
echo multiplyNumbers(9,10);


function printArray($array){
    for($i = 0; $i < count($array); $i++){
        echo $array[$i];
    }
    echo "<br>";
}
//zmienna liczba argumentow
function sumNumbers(...$array){
    $sum = 0;
    for($i = 0; $i < count($array); $i++){
        $sum = $sum + $array[$i];
    }
    return $sum;
}

//wartosc domyślna
//int w parametrach - jakiego typu są przyjmowane parametry
//int po dwukropku (na koncu sygnatury funkcji oznacza)
//typ zwracany przez funkcje
function multiplyNumbers(int $a,int $b = 9){
    return $a * $b;
}
$text = "elo";
function zamienNaWielkie(string $text): string{
    return strtoupper($text);
}

function czypierwsza(int $n): bool{
    if($n < 2){
        return false;
    }
    for($i = 2; $n < $n; $i++){
        if($n % $i == 0){
            return false;
        }
    }
    return true;
}
?>