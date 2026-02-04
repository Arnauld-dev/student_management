
<?php
require_once __DIR__ ."/../../dbconnection.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../sidebar.css">
    <title>Document</title>
</head>
<body style="margin=0;padding=0;">
      <div class="page-with-sidebar">
        <?php
        $base_path = '../../';
        include '../../sidebar.php';
        ?>


      <table>
        <thead>
            <tr>
                <th>ID student</th>
                <th>Student Name</th>
                <th>Student email</th>
                <th>Student class</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Father name</th>
                <th>Mother name</th>
                <th>Contact number</th>
                <th>Alternative</th>
                <th>Addresse</th>
            </tr>
        </thead>
        <tbody>
            <?php
    $sql="SELECT * FROM student_information";
    $mtc=$db->prepare($sql);
    $mtc->execute();
    $resultat=$mtc->fetchAll();

    foreach($resultat as $res){
        echo"<tr>";
             echo"<td>".$res['id']."</td>";
             echo"<td>".$res['studentname']."</td>";
             echo"<td>".$res['studentmail']."</td>";
             echo"<td>".$res['studentclasse']."</td>";
             echo"<td>".$res['dateofbirthday']."</td>";
             echo"<td>".$res['gender']."</td>";
             echo"<td>".$res['fathername']."</td>";
             echo"<td>".$res['mothername']."</td>";
             echo"<td>".$res['contactnumber']."</td>";
             echo"<td>".$res['alternative']."</td>";
             echo"<td>".$res['addresse']."</td>";
        echo"</tr>";
    };
    ?>

        </tbody>
    </table>

        </div>
    
    
</body>
</html>