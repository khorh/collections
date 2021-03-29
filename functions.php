<?php

/**
* output data from database
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