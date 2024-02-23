<?php

// // Function to establish a database connection
// function connect_to_database() {
//     $hostname = "localhost"; // Hostname of the MySQL server
//     $username = "root";      // Username for authentication
//     $password = "";          // Password for authentication
//     $database = "ltms"; // Name of the database to connect to
    
//     // Attempt to establish a connection
//     $conn = mysqli_connect($hostname, $username, $password, $database);
    
//     // Check if the connection was successful
//     if (!$conn) {
//         // If connection failed, display an error message
//         die("Connection failed: " . mysqli_connect_error());
//     }
    
//     // Return the established connection
//     return $conn;
// }

// Function for user registration
function register_user($username, $email, $password, $confirm_password) {
    // Connect to the database
    $conn = connect_to_database();
    
    // Check if passwords match
    if($password === $confirm_password) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password
        
        // Prepare the SQL statement to insert user data into the database
        $query = "INSERT INTO register (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
        
        // Execute the SQL query
        $query_run = mysqli_query($conn, $query);
        
        // Check if the query was successful
        if($query_run) {
            echo "done";
            $_SESSION['success'] = "Admin is Added Successfully";
            header('Location: register.php');
        } else {
            echo "not done";
            $_SESSION['status'] = "Admin is Not Added";
            header('Location: register.php');
        }
    } else {
        echo "pass no match";
        $_SESSION['status'] = "Password and Confirm Password Does not Match";
        header('Location: register.php');
    }
    
    // Close the database connection
    mysqli_close($conn);
}
// Function to count rows in the "users" table
function count_users() {
    // Connect to the database
    $conn = connect_to_database();
    
    // Prepare the SQL statement to count rows in the "users" table
    $query = "SELECT COUNT(*) AS total FROM users";
    
    // Execute the SQL query
    $result = mysqli_query($conn, $query);
    
    // Check if the query was successful
    if ($result) {
        // Fetch the result as an associative array
        $row = mysqli_fetch_assoc($result);
        
        // Get the count of rows from the associative array
        $count = $row['total'];
        
        // Free the result set
        mysqli_free_result($result);
        
        // Close the database connection
        mysqli_close($conn);
        
        // Return the count of rows
        return $count;
    } else {
        // If the query failed, display an error message
        echo "Error: " . mysqli_error($conn);
    }
}


// Assume the connect_to_database() function is already defined in function.php

// Function to count rows in the "receiver_transaction" table
function count_receiver_transactions() {
    // Connect to the database
    $conn = connect_to_database();
    
    // Prepare the SQL statement to count rows in the "receiver_transaction" table
    $query = "SELECT COUNT(*) AS total FROM receiver_transaction";
    
    // Execute the SQL query
    $result = mysqli_query($conn, $query);
    
    // Check if the query was successful
    if ($result) {
        // Fetch the result as an associative array
        $row = mysqli_fetch_assoc($result);
        
        // Get the count of rows from the associative array
        $count = $row['total'];
        
        // Free the result set
        mysqli_free_result($result);
        
        // Return the count of rows
        return $count;
    } else {
        // If the query failed, display an error message
        echo "Error: " . mysqli_error($conn);
    }
}


// Assume the connect_to_database() function is already defined in function.php

// Function to count rows in the "receiver_transaction" table with transaction_status = "Pending"
function count_pending_receiver_transactions() {
    // Connect to the database
    $conn = connect_to_database();
    
    // Prepare the SQL statement to count rows in the "receiver_transaction" table where transaction_status = "Pending"
    $query = "SELECT COUNT(*) AS total FROM receiver_transaction WHERE transaction_status = 'Pending'";
    
    // Execute the SQL query
    $result = mysqli_query($conn, $query);
    
    // Check if the query was successful
    if ($result) {
        // Fetch the result as an associative array
        $row = mysqli_fetch_assoc($result);
        
        // Get the count of rows from the associative array
        $count = $row['total'];
        
        // Free the result set
        mysqli_free_result($result);
        
        // Return the count of rows
        return $count;
    } else {
        // If the query failed, display an error message
        echo "Error: " . mysqli_error($conn);
    }
}

// Function to count rows in the "requests" table with request_status = "Pending"
function count_pending_requests() {
    // Connect to the database
    $conn = connect_to_database();
    
    // Prepare the SQL statement to count rows in the "requests" table where request_status = "Pending"
    $query = "SELECT COUNT(*) AS total FROM requests WHERE request_status = 'Pending'";
    
    // Execute the SQL query
    $result = mysqli_query($conn, $query);
    
    // Check if the query was successful
    if ($result) {
        // Fetch the result as an associative array
        $row = mysqli_fetch_assoc($result);
        
        // Get the count of rows from the associative array
        $count = $row['total'];
        
        // Free the result set
        mysqli_free_result($result);
        
        // Return the count of rows
        return $count;
    } else {
        // If the query failed, display an error message
        echo "Error: " . mysqli_error($conn);
    }
}

function getUsersData($conn) {
    // SQL query to retrieve all user data
    $sql = "SELECT * FROM users";

    // Execute the query
    $result = $conn->query($sql);

    // Check if there are results
    if ($result->num_rows > 0) {
        // Fetch data and store in array
        $users = array();
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        return $users;
    } else {
        // If no results found, return empty array
        return array();
    }
}

// Example usage:
//$conn = establishDatabaseConnection(); // Replace with your function to establish connection
//$allUsers = getUsersData($conn);
//print_r($allUsers);s
?>
