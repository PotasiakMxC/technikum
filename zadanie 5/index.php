<?php
    $array = [1, 2, 3, 4, 5];

    $index_to_remove = 2;

    unset($array[$index_to_remove]);
    
    $array = array_values($array); 
    var_dump($array);

    for($i = 0; $i < count($array); $i++){
        $array[$i] = 0;
    }
    echo "<br>";
    var_dump($array);

    echo "<h1>Tablica dwu wymiarowa</h1>";
    
    $array2D = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
    
    echo "<br>";
    echo $array2D[0][0];
    echo "<br>";
    for($i = 0; $i < count($array2D); $i++){
        for($j = 0; $j < count($array2D[$i]); $j++){
            echo $array2D[$i][$j];
            echo " ";
        }
        echo "<br>";
    }

    echo "<br>";

    $osoby = [
        ["imie" => "jan", "wiek" => 20],
        ["imie" => "anna", "wiek" => 25],
        ["imie" => "jakub", "wiek" => 30]
    ];

    foreach($osoby as $wiersz){
        foreach($wiersz as $element){
            echo $element . " ";
        }
        echo "<br>";
    }

    for($i = 0; $i <count($osoby); $i++){
        foreach($osoby[$i] as $ $element){
            echo $element . " ";
        }
        echo "<br>";
    }

    $array4x4 = [
        [1,2,3,4],
        [5,6,7,8],
        [9,10,11,12],
        [13,14,15,16]
    ];
    $n = count($array4x4);

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($i == $j) {
                $array4x4[$i][$j] = 0;
            }
            echo " ";
        }
        echo "<br>";
    }
    

    printArray($array4x4);

    function printArray($array2D){
        for($i = 0; $i < count($array2D); $i++){
            for($j = 0; $j < count($array2D[$i]); $j++){
                echo $array2D[$i][$j];
                echo " ";
            }
            echo "<br>";
        }
    }


    $sum = 0;
    for($i = 0; $i < count($array4x4); $i++){
        for($j = 0; $j < count($array4x4[$i]); $j++){
            $sum = $sum + $array4x4[$i][$j];
        }
    }
    echo $sum;



    $sum2 = 0;
    for($i = 0; $i < count($array4x4); $i++){
        for($j = 0; $j < count($array4x4[$i]); $j++){
            $sum = $sum + $array4x4[$i][$j];
        }
    }


    $array5x5 = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 16]
];

$suma = 0;

for ($i = 0; $i < count($array5x5); $i++) {
    for ($j = 0; $j < count($array5x5[$i]); $j++) {
        if ($j === 0) {
            $suma += $array5x5[$i][$j];
        }
    }
}
echo "<br>";

echo "Suma: " . $suma;
?>