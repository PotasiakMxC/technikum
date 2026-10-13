<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 11</title>
</head>
<body>
    <form action="./" method="GET">
        <label for="name">Imie: </label>
        <input type="text" id="name" name="name"><br>

        <label for="age">Wiek: </label>
        <input type="Number" id="age"><br>

        <label for="password">Hasło: </label>
        <input type="text" id="password" name="password"><br>

        <label for="mail">E-mail: </label>
        <input type="text" id="mail" name="Mail"><br>

        <input type="checkbox" name="accepted" value="true">Akceptuje regulamin <br>
    
        <input type="submit" value="Zajerestruj sie">
    </form>
</body>
</html>

<?php
    $imie = $_GET["name"];
    $age = $_GET["age"];
    $password = $_GET["password"];
    $mail = $_GET["mail"];
    
    if($imie < strlen($imie) && strlen($imie) == 3){
        echo "za krótko";
    }

?>

<!-- <label for="name">Imie: </label>
        <input type="text" id="name" name="name"><br>


        <label for="age">Wiek:</label>
        <input type="number" id="age" name="age"><br>



        <select name="ticket">
            <option value="Ulgowy">Ulgowy</option>
            <option value="Normalny">Normalny</option>
        </select><br>

        <input type="submit" value="oblicz sume"> -->




<!-- $ticket = $_GET['ticket'];
    $age = $_GET['age'];
    $ticketprice;
    
    if($ticket == "Normalny" && $age > 7){
        $ticketprice = 30;
    }else if($ticket == "Ulgowy" && $age > 7){
        $ticketprice = 15;
    }else if($age <= 7){
        $ticketprice = 0;
    }

    echo "Cześć, " . $_GET["name"] . "<br>";
    echo "twój wiek, " . $age . "<br>";
    echo "Rodzaj wybranego biletu, " . $_GET["ticket"] . "<br>";
    echo "Cena do zapłaty, " . $ticketprice . "<br>"; -->