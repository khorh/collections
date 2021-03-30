<?php
//connect to the database and hide the db-connection.php into gitignore
//get products from the database by creating a separate file for functions
require_once 'db-connection.php';
require_once 'functions.php';
$db = getDb();
$products = getProducts($db);
$productsToDisplay = displayAllProducts($products);
?>

<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <title>Matcha Collection</title>
        <link rel="stylesheet" href="normalize.css" type="text/css">
        <link rel="stylesheet" href="styles.css" type="text/css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>Matcha</h1>
        </header>
        <main>
                <?php
                echo $productsToDisplay;
                ?>
        </main>
    </body>
</html>


