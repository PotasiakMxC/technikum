<?php
    session_start();

    if(!isset($_SESSION['koszyk'])){
        $_SESSION['koszyk'] = [];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dokonczenie zad 16</title>
</head>
<body>
    <form method="POST" action="">
        <label for="name">nazwa</label>
        <input name='name' type='text'>
        <label for="price">Cena</label>
        <input name='price' type='text'>
        <label for="amount">ilość</label>
        <input name='amount' type='text'>
        <input type='submit' value='wyślij'>
    </form>

<?php
    //utworzenie tablicy z informacjami z formularza 
    //przepisanie ich z POST do nowej tablicy asocjacyjnej
    $new_produkt= [
        'name' => $_POST['name'],
        'price' => $_POST['price'],
        'amount' => $_POST['amount']
    ];
    
    $_SESSION['koszyk'][] = $new_produkt;
    // var_dump($_SESSION['koszyk']);
    echo "<table border=1>";
    foreach($_SESSION['koszyk'] as $product){
        echo "<tr>";
        echo "<td>".$product['name']."</td>";
        echo "<td>".$product['price']."</td>";
        echo "<td>".$product['amount']."</td>";
        echo "</tr>";
    }
    echo "</table>";
?>
</body>
</html>