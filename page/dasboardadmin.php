<?php
include 'dbconnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sidebar.css">
    <title>Admin Dashboard</title>
</head>
<body style="margin: 0; padding: 0;">
    <div class="page-with-sidebar">
        <?php
        
        include 'sidebar.php';
        ?>
        
        <div class="main-content-with-sidebar">
            <h1>Tableau de bord Administrateur</h1>
            <p>Bienvenue sur le tableau de bord administrateur</p>
        </div>
        <div class="dashboard">
              <div class="box-dashboard">

              </div>
              <div class="box-dashboard">
                
              </div>
              <div class="box-dashboard">
                
              </div>
              <div class="box-dashboard">
                
              </div>
              <div class="box-dashboard">
                
              </div>
        </div>
    </div>
</body>
</html>