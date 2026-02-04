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

    <title>Student Management System</title>
</head>
<body style="margin: 0; padding: 0;">
    <div>
        <?php
        include 'header.php';
        ?>
    </div>
    
    <div class="main-content">
        <h1>Student Management System</h1>
        <p>Registered Students can Login Here</p>
        <p><a href="login.php">Student Login ></a></p>
    </div>
    
    <div class="footer">
        <?php
        include 'footer.php';
        ?>
    </div>
</body>
</html>