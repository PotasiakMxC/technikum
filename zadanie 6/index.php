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




function obliczmin(array $liczby){
    $min = $liczby[0];
    foreach ($liczby as $liczba){
        if($liczba < $min){
            $min = $liczba;
        }
    }
    return $min;
}
function obliczMax(array $liczby){
    $max = $liczby[0];
    foreach($liczby as $liczba){
        if($liczba > $max){
            $max = $liczba;
        }
    }
    return $max;
}
function obliczSrednia(array $liczby){
    $suma = 0;
    $ilosc = 0;
    foreach($liczby as $liczba){
        $suma = $suma + $liczba;
        $ilosc++;
    }
    return $suma / $ilosc;
}
$liczby = [5,10,15,20,25];

echo "minimum: "

//praca domowa

function obliczSume(array $liczby)
{
    $suma = 0;

    foreach ($liczby as $liczba) {
        $suma += $liczba;
    }

    return $suma;
}

function obliczStatystyki(array $liczby)
{
    $suma = obliczSume($liczby);
    $srednia = $suma / count($liczby);

    $min = $liczby[0];
    $max = $liczby[0];

    foreach ($liczby as $liczba) {
        if ($liczba < $min) {
            $min = $liczba;
        }

        if ($liczba > $max) {
            $max = $liczba;
        }
    }

    return [
        "min" => $min,
        "max" => $max,
        "suma" => $suma,
        "srednia" => $srednia
    ];
}


// Podane liczby
$liczby = [10, 5, 8, 20, 7];

// Obliczenie statystyk
$wynik = obliczStatystyki($liczby);

// Wyświetlenie wyników
echo "Liczby: ";
print_r($liczby);

echo "Najmniejsza liczba: " . $wynik["min"] . PHP_EOL;
echo "Najwieksza liczba: " . $wynik["max"] . PHP_EOL;
echo "Suma: " . $wynik["suma"] . PHP_EOL;
echo "Srednia: " . $wynik["srednia"] . PHP_EOL;


?>
