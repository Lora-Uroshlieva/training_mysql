<?php
include 'settings.php';

//PDO - php data object

$pdo = new PDO('mysql:dbname=lesson2;host=127.0.0.1', 'root', $pass);

//var_dump($pdo);

$result = $pdo->prepare('INSERT INTO Bank_customer (bank_name, customer_inn) VALUES ("Platinum", 7777777)');

$result = $pdo->query('INSERT INTO Bank_customer (bank_name, customer_inn) VALUES ("Platinum", 7777777)');

//var_dump($result);

while ($row = $result->fetch()) {
    print_r($row);
}

