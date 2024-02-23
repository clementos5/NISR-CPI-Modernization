<?php

function db_connect_price_main() {
    $hostname = "localhost"; // Hostname of the MySQL server db_connect_price_main
    $username = "Big_Data";      // Username for authentication
    $password = "BiData_20@*$#^23"; // Password for authentication
    $database = "price_main";
    $port = 3306; // Database port (assuming a default port of 3306 if not specified)

    try {
        // Establish connection
        $dsn = "mysql:host=$hostname;port=$port;dbname=$database;charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        $pdo = new PDO($dsn, $username, $password, $options);

        return $pdo;
    } catch (PDOException $e) {
        // Handle errors
        echo "Connection failed: " . $e->getMessage();
        return null;
    }
}


function db_connect_item() {
    $hostname = "localhost"; // Hostname of the MySQL server
    $username = "Big_Data";      // Username for authentication
    $password = "BiData_20@*$#^23"; // Password for authentication
    $database = "price_main";
    $port = 3306; // Database port (assuming a default port of 3306 if not specified)

    try {
        // Establish connection
        $dsn = "mysql:host=$hostname;port=$port;dbname=$database;charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        $pdo = new PDO($dsn, $username, $password, $options);

        return $pdo;
    } catch (PDOException $e) {
        // Handle errors
        return null;
    }
}

function db_connect_outlet() {
    $hostname = "localhost"; // Hostname of the MySQL server
    $username = "Big_Data";      // Username for authentication
    $password = "BiData_20@*$#^23"; // Password for authentication
    $database = "price_main";
    $port = 3306; // Database port (assuming a default port of 3306 if not specified)

    try {
        // Establish connection
        $dsn = "mysql:host=$hostname;port=$port;dbname=$database;charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        $pdo = new PDO($dsn, $username, $password, $options);

        return $pdo;
    } catch (PDOException $e) {
        // Handle errors
        echo "Connection failed: " . $e->getMessage();
        return null;
    }
}





// Function to connect to the price_main database
function db_connect_login() {
    $hostname = "localhost"; // Hostname of the MySQL server
    $username = "Big_Data";      // Username for authentication
    $password = "BiData_20@*$#^23"; // Password for authentication
    $database = "price_main";
    $port = 3306; // Database port (assuming a default port of 3306 if not specified)

    try {
        // Establish connection
        $dsn = "mysql:host=$hostname;port=$port;dbname=$database;charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        $pdo = new PDO($dsn, $username, $password, $options);

        return $pdo;
    } catch (PDOException $e) {
        // Handle errors
        echo "Connection failed: " . $e->getMessage();
        return null;
    }
}








?>