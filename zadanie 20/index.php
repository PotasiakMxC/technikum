<?php
    require_once "db_connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lekcja 20</title>
</head>
<body>
    <form method="POST" action="">
        <label for="name">nazwa</label>
        <input name='name' type='text'>
        <br><br>
        <label for="price">Cena</label>
        <input name='price' type='text'>
        <br><br>
        <label for="amount">ilość</label>
        <input name='amount' type='text'>
        <br><br>
        <input type='submit' value='wyślij'>
    </form>
<?php
<<<<<<< HEAD
    if (isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["price"]) && isset($_POST["amount"])) {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $amount = $_POST["amount"];
    $id = $_POST["id"];

    $sql = "UPDATE products SET 
            'name' = '$name',
            'price' = '$price',
            'amount' = '$amount'
            WHERE 'id' = '$id'";



    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo "Zaktualizowano rekord o ID " . htmlspecialchars($id);
    } else {
        echo "Błąd: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
=======
    if(isset($_POST["name"]) && isset($_POST["price"]) && isset($_POST["amount"])){
        echo "Nazwa: ".$_POST["name"]."<br>";
        echo "Cena: ".$_POST["price"]."<br>";
        echo "Ilość: ".$_POST["amount"]."<br>";

        $name = $_POST["name"];
        $price = $_POST["price"];
        $amount = $_POST["amount"];

        $sql = "INSERT INTO Products (name,price,amount) 
        VALUES (".$name.", ".$price.", ".$amount.")";
        
        if(mysqli_query($conn, $sql)){
            echo "udało sie dodać rekord!";
        }else{
            echo "bluescreenie panie Heniu: ". mysqli_error($conn);
        }

        mysqli_close($conn);
    }
>>>>>>> origin/main
?>
</body>
</html>