<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 10</title>
</head>
<body>
    <form action="" method="POST">
        <label for="name">Imie:</label>
        <input type="text" id="name" name="name"><br>
        
        <label for="age">Wiek:</label>
        <input type="number" id="age" name="age"><br>

        <label for="sex">Płeć: </label>
        <input type="radio" name="sex" value="k">Kobieta
        <input type="radio" name="sex" value="m">Mężczyzna
        <input type="radio" name="sex" value="n">Mikrofalówka wielofunkcyjna marki Samsung z podpisem ceo apple i torebką foliową w zestawie


        <br>
        <label for="game">Ulubiona seria gier: </label> <br>
        <input type="checkbox" name="game1" value="gta">GTA <br>
        <input type="checkbox" name="game2" value="Fortnite">Fortnite <br>
        <input type="checkbox" name="game3" value="five night's at freddy's">fnaf <br>
        <input type="checkbox" name="game4" value="cs">cs2 <br>
        <input type="checkbox" name="game5" value="Valorant">Valorant <br>
        <input type="checkbox" name="game6" value="League of legends">LOL <br>
        <br>
        <input type="submit" value="przesli">
    </form>
</body>
</html>

<?php
    if(isset($_POST['name']) && isset($_POST['age']) && $_POST['name'] != "" && $_POST['age'] != ""){
        echo $_POST['name'];
        echo $_POST['age'];
    } else {
        echo "wypełnij wszystko";
    }

    if(isset($_POST['sex'])){
        if($_POST['sex'] == 'm'){
            echo "<br>";
            echo "mężczyzna";
        }else if(isset($_Post['sex']) == 'k'){
            echo "<br>";
            echo "Kobieta";
        }else{
            echo "<br>";
            echo "Mikrofalówka wielofunkcyjna marki Samsung z podpisem ceo apple i torebką foliową w zestawie";
        }
    }

    if(isset($_POST['game1']) && $_POST['game1']== "gta"){
        echo "wybrane";
    }
?>