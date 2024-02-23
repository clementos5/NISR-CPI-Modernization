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
            header("Location: index.php");
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
<body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-form">
                    <form method="POST" action="login.php">
                        <div class="login-logo">
                            <a href="index.php">
                                <img class="align-content" src="images/cpi-image.png" style="max-width: 200px; max-height: auto;" alt="">
                            </a>
                        </div>
                        <!-- Display error message if exists -->
                        <?php if(isset($error)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $error; ?>
                            </div>
                        <?php } ?>
                        <div class="form-group">
                            <label>Your full Name</label>
                            <input type="text" class="form-control" name="full_name" placeholder="Your full Name">
                        </div>
                        <div class="form-group">
                            <label>Telephone</label>
                            <input type="text" class="form-control" name="telephone" placeholder="Telephone">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div>
                        <div class="social-login-content">
                            <div class="social-button">
                                <button type="submit" name="login" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-user"></i>Sign in</button>
                            </div>
                            <div class="social-button">
                                <button type="submit" name="login" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-user"></i>Reset Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/scripts.php'); ?>
    <?php include('includes/footer.php'); ?>
