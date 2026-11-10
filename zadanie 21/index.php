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
        <label for="id">id</label>
        <input name='id' type='number'>
        <!-- <label for="price">Cena</label>
        <input name='price' type='text'>
        <label for="amount">ilość</label>
        <input name='amount' type='text'> -->
        <input type='submit' value='wyślij'>
    </form>
<?php
    if(isset($_POST["id"])){
        $id = $_POST['id'];

        $sql = "DELETE FROM `products` WHERE `id`='$id'";
        
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "udało sie usunąć!";
        }else{
            echo "bluescreenie panie Heniu: ". mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>
</body>
</html>