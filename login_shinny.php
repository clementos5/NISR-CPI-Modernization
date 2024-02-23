<?php
session_start();
include('includes/header.php'); 
include('includes/scripts.php'); 

// Include the function to connect to the database using PDO
include('includes/conn.php');
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
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="title">Welcome to CPI System</div>
        <div class="title">Login Here</div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-4">
        <div class="login-container">
          <div class="form-group shiny-input-container">
            <label class="control-label" id="username-label" for="username">
              <div class="input-label">Username (E-mail)</div>
            </label>
            <input id="username" type="text" class="shiny-input-text form-control" value=""/>
          </div>
          <div class="form-group shiny-input-container">
            <label class="control-label" id="password-label" for="password">
              <div class="input-label">Password</div>
            </label>
            <input id="password" type="password" class="shiny-input-password form-control" value=""/>
          </div>
          <button class="btn btn-default action-button btn-primary login-button" id="loginBtn" type="button">Login</button>
        </div>
      </div>
      <div class="col-sm-4">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <button class="btn btn-default action-button login-button" id="resetPasswordBtn" type="button">Reset Password</button>
      </div>
      <div class="col-sm-3">
        <!-- <button class="btn btn-default action-button login-button" id="registerBtn" type="button">New User Registration</button> -->
      </div>
      <div class="col-sm-3">
      </div>
    </div>
  </div>
</body>
</html>
