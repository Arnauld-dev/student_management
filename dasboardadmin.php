<?php
include 'dbconnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="sidebar.css">
    <title>Admin Dashboard</title>
</head>
<body >
    <div class="page-with-sidebar">
        <div>
            <?php
            include 'sidebar.php';
            ?>
        </div>
       
        <div class="main-content-with-sidebar">
                <div  class="dashboard-header">
                    <h1>Tableau de bord Administrateur</h1>
                    <p>Bienvenue sur le tableau de bord administrateur</p>
                </div>
                <div class="dashboard-container">
                    <div class="box-dashboard"> 
                        <h1 ><a href="admin_panel/student/displayStudent.php" class="h1"> Total Student <span>10</span></a></h1>
                    </div>
                    <div class="box-dashboard">
                        <h1><a href="admin_panel/classe/displayclass.php" class="h1">Total Classe <span>5</span></a></h1>
                    </div>
                    <div class="box-dashboard">
                        <h1><a href="admin_panel/homework/displayhomework.php" class="h1">Total Homework <span>2</span></a></h1>
                    </div>
                    <div class="box-dashboard">
                        <h1 > <a href="admin_panel/notice/displaynotice.php" class="h1">Total Notice <span>2</span></a></h1>
                    </div>
                </div>
                <div class="statistics-section">
                    <h2>Statistics</h2>
                    <p>Section des statistiques à venir...</p>


                </div>
             
        </div>
    </div>
</body>
</html>