<?php

//connect to the database and hide the db-connection into gitignore
require_once 'db-connection.php';
require_once 'functions.php';

$db = getDb();
$products = getProducts($db);

echo '<ul>';
foreach($products as $product) {
    echo '<li>' . $product['image'] . $product['product_name'] . $product['business_name'] . $product['currency'] . $product['price'] . '</li>';
}
echo '</ul>';

?>
