<?php
//connect to the database and hide the db-connection.php into gitignore
//get products from the database by creating a separate file for functions
require_once 'db-connection.php';
require_once 'functions.php';
$db = getDb();

if(isset($_POST['submit']))
{
    $image = $_POST['image'];
    $productName = $_POST['product_name'];
    $businessName = $_POST['business_name'];
    $currency = $_POST['currency'];
    $price = $_POST['price'];
    $sql = "INSERT INTO products (image, product_name, business_name, currency, price)
     VALUES ('$image', '$productName', '$businessName','$currency', '$price')";
    if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

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
            <h2>ADD MATCHA</h2>
        </header>
        <main>
            <form method="post" action="add-matcha.php">
                <label for="image">Upload image *</label>
                <input type="file" name="image" required />
                <label for="product_name">Product name *</label>
                <input type="text" name="product_name" required />
                <label for="business_name">Business name *</label>
                <input type="text" name="business_name" required />
                <label for="currency">Currency e.g GBP *</label>
                <input type="text" name="currency" required />
                <label for="price">Price *</label>
                <input type="text" name="price" required />
                <input type="submit" value="SUBMIT" />
            </form>
        </main>
    </body>
</html>