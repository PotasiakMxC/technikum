<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if(isset($_SESSION['koszyk'])){
        $_SESSION['koszyk'] = [];
    }
    $kom = " ";

    
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lekcja 16</title>
</head>
<body>
    <!-- <form method="GET">
        <label for="imie">Imie: </label>
        <input type="text" id="imie" name="imie">
        <button type="submit">Wyślij</button>
    </form>
    <br><br>
    <form method="POST">
        <label for="age">Wiek: </label>
        <input type="text" id="age" name="age">
        <button type="submit">Wyślij</button>
    </form> -->
    <form method="POST">
        <label for="product">Nazwa produktu kupującego: </label>
        <input type="text" id="product" name="product">

        <label for="cena">cena za sztuke: </label>
        <input type="text" id="cena" name="cena">

        <label for="ilosc">podaj ilość: </label>
        <input type="text" id="ilosc" name="ilosc">
        <button type="submit">Wyślij</button>
    </form>

    <h2>Produkty w koszyku </h2>

</body> 
<?php
// if(isset($_GET['imie'])){
//     echo $_GET['imie'];
// }

// if(isset($_POST['age'])){
//     echo $_POST['age'];
// }

// if(isset($_POST['product']) && isset($_POST['cena']) && isset($_POST['ilosc'])){
//     $product = $_POST['product'];
//     $cena = $_POST['cena'];
//     $ilosc = $_POST['ilosc'];
//     $zaplata = $cena*$ilosc;
//     echo $_POST["product"] . " ilosc:" . $ilosc . " Cena:" . $cena . " do zapłaty:" . $zaplata;
// }
?>
</html>
















    