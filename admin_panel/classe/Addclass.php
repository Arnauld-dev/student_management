<?php
    require_once __DIR__ ."/../../dbconnection.php";
    if(isset($_POST['submit'])){
            if(isset($_POST['className'])&&isset($_POST['section'])){
                if($_POST['className']==""||$_POST['section']==""){
                    echo "<script>alert('Added class failed')</script>";
                }else{
                    $className=$_POST['className'];
                    $section=$_POST['section'];
                    $sql="INSERT INTO classe(classname,section) VALUES(?,?)";
                    $statement=$db->prepare($sql);
                    $resultat=$statement->execute([$className],[$section]);
           if($resultat){
            echo"<script>alert('Class added successfully')</script>";
        };
        };   
        };
    };
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="classe.css">
    <link rel="stylesheet" href="../../sidebar.css">
    <title>Document</title>
</head>
<body>
    <div class="page-with-sidebar">
        <?php
        $base_path = '../../';
        include '../../sidebar.php';
        ?>
        <div class="main-content-with-sidebar">
            <div class="box">
            <h1>Add Class</h1>
            <form action="" method="post">
                <label for="className">Class Name</label>
                <input type="text" name="className" id="className">
                <label for="section">Section</label>
                <input type="text" name="section" id="section">
                <button type="submit" name="submit">Add</button>
            </form>
            </div>
        </div>
        
    </div>
</body>
</html>