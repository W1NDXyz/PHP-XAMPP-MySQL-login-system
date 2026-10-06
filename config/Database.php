<?php

$host = "localhost";
$dbname = "dblogin_system";
$username = "root";
$password = "";

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $username, $password);

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    //Set the default fetch mode to associative array, to avoid using [numeric indexes] when fetching data from the database.
    $pdo->setAttribute(                 
        PDO::ATTR_DEFAULT_FETCH_MODE,
        PDO::FETCH_ASSOC
    );
    /*ASSOC means associative.
    An associative array uses a meaningful name as the key. */

} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

?>