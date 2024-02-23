<?php
session_start();
 include('../includes/conn.php');

// Check if form is submitted
if(isset($_POST['login'])) {
    // Get user input
    $fullName = $_POST['full_name'];
    $telephone = $_POST['telephone'];
    
    try {
        // Connect to the database using the login credentials
        $pdo = db_connect_price_main();
        
        // Prepare SQL statement
        $stmt = $pdo->prepare("SELECT * FROM data_collector WHERE data_collector_name = :full_name AND (data_collector_phone1 = :telephone1 OR data_collector_phone2 = :telephone2)");
        
        // Bind parameters
        $stmt->bindParam(':full_name', $fullName);
        $stmt->bindParam(':telephone1', $telephone);
        $stmt->bindParam(':telephone2', $telephone);
        
        // Execute query
        $stmt->execute();
        
        // Check if user exists
        if($stmt->rowCount() > 0) {
            // User exists, redirect to dashboard
            header("Location: http://localhost/cpi/index.php");
            exit();
        } else {
            // User does not exist, set error message in session
            $_SESSION['error'] = "You must fill the correct value or Contact System Administrator for help";
        }
    } catch(PDOException $e) {
        // Handle database connection error
        echo "Connection failed: " . $e->getMessage();
    }
}

?>
