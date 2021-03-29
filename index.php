<?php

//connect to the database and hide the db-connection into gitignore
require_once 'db-connection.php';

//output data from database
function getProducts(PDO $db): array
{
    $query = $db->prepare("SELECT `image`, `product_name`, 
                                    `business_name`, `currency`, `price`,
                                FROM `products`;");
    $query->execute();
    return $query->fetchAll();
}