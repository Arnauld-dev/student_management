<?php
include 'dbconnection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="home.css">
    <title>Login - Student Management System</title>
</head>
<body style="margin: 0; padding: 0;">
    <div>
            <div>
                <?php
                include 'header.php';
                ?>
            </div>
     
    <div class="login-container" style="margin-top: 80px;">
        <div class="login-box">
            <div class="login-header">
                <h1>Welcome Back</h1>
                <p>Sign in to your account</p>
            </div>

            <form class="login-form" method="POST" action="dasboardadmin.php">
                
                <div class="form-group login-form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="form-group login-form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>

                <button type="submit" class="login-btn">Sign In</button>
            </form>

            <div class="login-footer">
                <p>Don't have an account? <a href="register.php" class="register-link">Register here</a></p>
            </div>
        </div>

        
   
</body>
</html>
