<?php

function countCasesInDatabase() {
    try {
        // Establish connection using db_connect()
        $pdo = db_connect_price_main();

        // Execute query
        $query = "SELECT COUNT(*) AS case_count FROM price_main_data_rec";
        $statement = $pdo->query($query);
        
        // Fetch results
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        
        // Close connection
        $pdo = null;
        
        // Return the count
        return $result['case_count'];
    } catch (PDOException $e) {
        // Handle errors
        echo "Error: " . $e->getMessage();
        return null;
    }
}


// Function to fetch data from the database LIVE DATA price Table
function fetchAndMapData() {
    try {
        // Establish connection using db_connect()
        $pdo = db_connect_price_main();

        // Execute query
        $query = "SELECT * FROM PRICE_MAIN.price_main_data_rec LIMIT 5000";
        $statement = $pdo->query($query);
        
        // Fetch results
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        // Close connection
        $pdo = null;
        
        // Return the mapped data
        return $results;
    } catch (PDOException $e) {
        // Handle errors
        echo "Error: " . $e->getMessage();
        return null;
    }
}

?>

