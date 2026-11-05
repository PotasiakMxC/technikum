<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "warehouse";

$conn = new mysqli($host, $username, $password, $database);
if($conn->connect_error){
    die("połaczenie nie powiodło się: ". $con->connection_error);
}
echo "połączenie się powiodło.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 19</title>
</head>
<body>
    <h1>Lista produktów</h1>

    <?php
    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);

    while($row = $result)
    ?>
</body>
</html>