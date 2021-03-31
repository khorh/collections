<?php
//connect to the database and hide the db-connection.php into gitignore
//get products from the database by creating a separate file for functions
require_once 'db-connection.php';
require_once 'functions.php';
$db = getDb();

?>

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
            <h2>ADD MATCHA</h2>
        </header>
        <main>
            <form method="post" action="add-matcha.php">
                <label for="image">Upload image *</label>
                <input type="text" id="image" name="image" required />
                <label for="product_name">Product name *</label>
                <input type="text" id="product_name" name="product_name" required />
                <label for="business_name">Business name *</label>
                <input type="text" id="business_name" name="business_name" required />
                <label for="currency">Currency e.g GBP *</label>
                <input type="text" id="currency" name="currency" required />
                <label for="price">Price *</label>
                <input type="number" id="price" name="price" step="0.01" min="0" required />
                <input type="submit" value="SUBMIT" />
            </form>
        </main>
    </body>
</html>