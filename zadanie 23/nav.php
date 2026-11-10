<?php
    $currentPage = basename($_SERVER["PHP_SELF"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nav.php</title>
    <link rel="stylesheet" href="styler.css">
</head>
<body>
<nav>
    <a href="jndex.php" class="<?= $currentPage == 'jndex.php' ? 'active' : '' ?>">main</a>
    <a href="about.php" class="<?= $currentPage == 'about.php' ? 'active' : '' ?>">about</a>
    <a href="contact.php" class="<?= $currentPage == 'contact.php' ? 'active' : '' ?>">kontakt</a>
</nav>    
</body>
</html>