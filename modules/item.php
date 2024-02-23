<?php
function countOutletInDatabase() {
    try {
        // Establish connection using db_connect()
        $pdo = db_connect_outlet();

        // Execute query
        $query = "SELECT COUNT(*) AS case_count_outlet FROM outlet;";
        $statement = $pdo->query($query);
        
        // Fetch results
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        
        // Close connection
        $pdo = null;
        
        // Return the count
        return $result['case_count_outlet'];
    } catch (PDOException $e) {
        // Handle errors
        echo "Error: " . $e->getMessage();
        return null;
    }
}


// Function to fetch data from the database price Table
function fetchAndMapOutlets() {
    try {
        // Establish connection using db_connect()
        $pdo = db_connect_outlet();

        // Execute query
        $query = "SELECT * FROM  outlet ";
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


// Function to fetch data from the database outlet in l_items Table
function fetchAndMapItems() {
    try {
        // Establish connection using db_connect()
        $pdo = db_connect_outlet();

        // Execute query
        $query = "SELECT * FROM  item";
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