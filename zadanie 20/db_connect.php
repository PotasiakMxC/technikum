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