<?php
include __DIR__ . '/../../dbconnection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../sidebar.css">
    <title>Display Homework</title>
</head>
<body style="margin: 0; padding: 0;">
    <div class="page-with-sidebar">
        <?php
        $base_path = '../../';
        include '../../sidebar.php';
        ?>
        
        <div class="main-content-with-sidebar">
            <h1>Homework List</h1>
            <table>
                <tr>
                    <th>ID</th>
                    
                    <th>Homework Title</th>
                    <th>Homework For</th>
                    <th>Homework Description</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                <?php
                $sql="SELECT * FROM homework";
                $stmt=$db->prepare($sql);
                $stmt->execute();
                $resultat=$stmt->fetchAll();
                foreach($resultat as $row){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['homeworktitle']."</td>";
                    echo "<td>".$row['homeworkfor']."</td>";
                    echo "<td>".$row['homeworkdescription']."</td>";
                    echo "<td>".$row['dateHomework']."</td>";
                    echo "<td><a href='edit_homework.php?id=".$row['id']."'>Edit</a> | <a href='delete_homework.php?id=".$row['id']."'>Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>