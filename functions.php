<?php

/**
* get all products data from database and show it
* @param PDO $db
* @return array
*/
function getProducts(PDO $db): array
{
$query = $db->prepare("SELECT `image`, `product_name`,
`business_name`, `currency`, `price`
FROM `products`;");
$query->execute();
return $query->fetchAll();
}

/**
 * display all products
 * @param $products
 * @return string
 */
function displayAllProducts(array $products): string {
    $result = '';
    foreach ($products as $product) {
        $result .= displayProduct($product);
    }
    return $result;
}

/**
 * split out each product
 * @param $product
 * @return string
 */
function displayProduct(array $product): string
{
    $result = '<div class="product"><div class="photo"><img src="' . $product['image'] . '" alt="food" /></div>';
    $result .= '<h2>' . $product['product_name'] . '</h2>';
    $result .= '<p>' . $product['business_name'] . '</p>';
    $result .= '<p>' . $product['currency'] . $product['price'] . '</p></div>';
    return $result;
}

$addMatcha = "INSERT INTO products (images, product_name, business_name, currency, price)
VALUES ";