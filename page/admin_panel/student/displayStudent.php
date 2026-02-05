
<?php
require_once __DIR__ ."/../../dbconnection.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../sidebar.css">
    <link rel="stylesheet" href="student.css">
    <title>Student Management - Display Students</title>
</head>
<body style="margin: 0; padding: 0;">

    <div class="page-with-sidebar">
        <div class="sidebar">
            <?php
            $base_path = '../../';
            include '../../sidebar.php';
            ?>
        </div>
        <div class="main-content-area">
            <div class="table-container">
                <table class="student-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Student Name</th>
                            <th>Email</th>
                            <th>Class</th>
                            <th>Date of Birth</th>
                            <th>Gender</th>
                            <th>Father Name</th>
                            <th>Mother Name</th>
                            <th>Contact</th>
                            <th>Alternative</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM student_information";
                        $mtc = $db->prepare($sql);
                        $mtc->execute();
                        $resultat = $mtc->fetchAll();

                        foreach($resultat as $res){
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($res['id']) . "</td>";
                            echo "<td>" . htmlspecialchars($res['studentname']) . "</td>";
                            echo "<td>" . htmlspecialchars($res['studentmail']) . "</td>";
                            echo "<td>" . htmlspecialchars($res['studentclasse']) . "</td>";
                            echo "<td>" . htmlspecialchars($res['dateofbirthday']) . "</td>";
                            echo "<td>" . htmlspecialchars($res['gender']) . "</td>";
                            echo "<td>" . htmlspecialchars($res['fathername']) . "</td>";
                            echo "<td>" . htmlspecialchars($res['mothername']) . "</td>";
                            echo "<td>" . htmlspecialchars($res['contactnumber']) . "</td>";
                            echo "<td>" . htmlspecialchars($res['alternative']) . "</td>";
                            echo "<td>" . htmlspecialchars($res['addresse']) . "</td>";
                            echo "<td>";
                            echo "<div class='action-buttons'>";
                            echo "<button class='btn-edit' onclick=\"editStudent(" . $res['id'] . ")\">Edit</button>";
                            echo "<button class='btn-delete' onclick=\"deleteStudent(" . $res['id'] . ")\">Delete</button>";
                            echo "</div>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
    </script>
</body>
</html>