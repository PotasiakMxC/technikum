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



    // $a = 12;

    // if($a%2 == 0){
    //     echo("liczba parzysta <br>");
    // }else{
    //     echo("liczba nie parzysta <br>");
    // }

    // $b = 9;
    // $c = 2;
    // if($b%$c == 0){
    //     echo("liczba podzielna przez drugą <br>");
    // }else{
    //     echo("liczba nie dzili sie przez drugą <br>");
    // }

    // $d =21;

    // if($d >= 1 && $d <=10){
    //     echo("liczba jest w przedziale 1-10 <br>");
    // }else if($d >= 17 && $d <=21){
    //     echo("liczba jest w przedziale 17-21 <br>");
    // }else{
    //     echo("nie jest w żadnym znanym przedziale! <br>");
    // }

    // $e = 1;

    // if($e > 0){
    //     echo("liczba większa od zera <br>");
    // }else if($e < 0){
    //     echo("mniejsza od zera <br>");
    // }else{
    //     echo("równa zeru <br>");
    // }

    // $wiek = 18;
    // if($wiek <= 11){
    //     echo("dziecko <br>");
    // }else if($wiek > 11 && $wiek <= 17){
    //     echo("nastolatek <br>");
    // }else{
    //     echo("dorosły <br>");
    // }



//     //pętla
//     for($i = 0; $i < 10; $i++){
//         echo $i;
//     }


// echo "<br>";
//     //while
//     $i = 0;
//     while($i < 5){
//         echo $i;
//         $i++;
//     }


// echo "<br>";
//     //pętla do while
//     $i = 1;

//     do{
//         echo $i;
//         $i++;
//     }while($i <= 5);


// echo "<br>";
//     //pętla for each
//     $tablica = [1,2,3,4,5];

//     foreach($tablica as $wartosc){
//         echo $wartosc;
//     }


// echo "<br>";
//     //pętla foreach tablica assocjacyjna

//     $owoce =[
//         "a" => "jabko",
//         "b" => "banan",
//         "c" => "gruszka"
//     ];
//     foreach($tablica as $klucz => $wartosc){
//         echo " klucz: ".$klucz." wartość: ".$wartosc;
//     }


// echo "<br>";
//     //pętla tablicy array

//     $array=[1,2,3];
//     $assoc_table = ["imie" => "Anna", "wiek"=>30];
//     $empty_array = [];
//     $array2 = array(1,2,3);

//     $arrayOfNumbers = [1,2,3];
//     for($i = 0; $i <count($arrayOfNumbers); $i++){
//         echo $arrayOfNumbers[$i];
//     }



//     //wstawienie jednego elementu
//     $number = 10;
//     $insertArray = [1,2,3];

//     for($i = 0; $i < count($insertArray); $i++){
//         $insertArray [$i] = $number;
//     }
    
//     //wstawianie elementów pod konkretny index
//     $number = 10;
//     $index = 0;
//     $insertArray = [1,2,3];

//     $insertArray[$index] = $number



    for($i = 1; $i < 101; $i+2){
        echo($i);
    }

    //while
    while($i > 0){
        echo $i;
        $i-4;
    }
?>