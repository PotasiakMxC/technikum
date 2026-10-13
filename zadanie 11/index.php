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


        <label for="age">Wiek:</label>
        <input type="number" id="age" name="age"><br>



        <select name="ticket">
            <option value="Ulgowy">Ulgowy</option>
            <option value="Normalny">Normalny</option>
        </select><br>

        <input type="submit" value="oblicz sume">
    </form>
</body>
</html>

<?php
    $ticket = $_GET['ticket'];
    $age = $_GET['age'];
    $ticketprice = 0;
    
    if($ticket == "Normalny" && $age > 7){
        $ticketprice = 30;
    }else if($ticket == "Ulgowy" && $age > 7){
        $ticketprice = 15;
    }else if($age <= 7){
        $ticketprice = 0;
    }

    echo $ticketprice;
?>