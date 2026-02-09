<?php
    require_once __DIR__ ."/../../dbconnection.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../sidebar.css">
    <title>Display Notice</title>
</head>
<body style="margin: 0; padding: 0;">
    <div class="page-with-sidebar">
        <?php
        $base_path = '../../';
        include '../../sidebar.php';
        ?>
        
        <div class="main-content-with-sidebar">
            <h1>Notice List</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Notice title</th>
                    <th>Notice for</th>
                    <th>Notice message</th>
                </tr>
            <?php
            $sql="SELECT * FROM notice ";
            $statement=$db->prepare($sql);
            $statement->execute();
            $resultat= $statement->fetchAll();
            foreach($resultat as $res){
                echo "<tr>";
                echo "<td>".$res['id_notice']."<td>";
                echo "<td>".$res['noticetitle']."<td>";
                echo "<td>".$res['noticefor']."<td>";
                echo "<td>".$res['noticemessage']."<td>";
                echo "<tr>";

            }
            ?>
        </table>
        </div>
    </div>
</body>
</html>