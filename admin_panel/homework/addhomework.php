<?php
require_once  __DIR__ . '/../../dbconnection.php';

if(isset($_POST['submit'])){
    if(isset($_POST['homeworktitle'])&&isset($_POST['classe'])&&isset($_POST['description'])&&isset($_POST['date'])){
        if($_POST['homeworktitle']=="" || $_POST['classe']==""||$_POST['description']=="" || $_POST['date']==""){
            echo "<script>alert('Failed to add homework')</script>";

        }else{
            $homeworktitle=$_POST['homeworktitle'];
            $classe=$_POST['classe'];
            $description=$_POST['description'];
            $Date=$_POST['date'];
            $sql="INSERT INTO homework(homeworktitle,homeworkfor,homeworkdescription,dateHomework) VALUES(?,?,?,?)";
            $stmt=$db->prepare($sql);
            $resultat=$stmt->execute([$homeworktitle,$classe,$description,$Date]);
            if($resultat){
                    echo "<script>alert('Homework added successfully')</script>";
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
    <link rel="stylesheet" href="../../sidebar.css">
    <title>Add Homework</title>
    <style>
        form{
            margin-left:200px;
            display:flex;
            flex-direction:column;
            font-size:20px;
            gap: 10px;
            
        }
        input{
            width: 600px;
            height:40px;
            outline:none;
            padding:10px;
            font-size:19px;
            border-radius:5px;
            border:solid 2px rgb(77, 75, 75);
        }
        body{
            background-color: rgb(77, 75, 75);
        }
        textarea{
            width: 600px;
            height:200px;
            outline:none;
            padding:10px;
            font-size:19px;
            border-radius:5px;
            border:solid 2px rgb(77, 75, 75);
        }
        .button1{
            width:150px;
            height:50px;
            border-radius:5px;
            outline:none;
            border:none;
            background:rgb(0, 166, 255);
            font-size:19px;
            color:white;
            cursor:pointer;
            padding:5px;
        }
        #content{
            background-color:white;
        }
    </style>
</head>

<body style="margin: 0; padding: 0;">
    <div class="page-with-sidebar">
        <?php
        $base_path = '../../';
        include '../../sidebar.php';
        ?>
        
        <div class="main-content-with-sidebar" id="content">
            <h1 style="margin-left:350px;margin-top:50px;margin-bottom:50px;">Add Homework</h1>
            <form action="" method="post">
                <label for="homeworktitle">Homework title</label>
                <input type="text" name="homeworktitle" id="homeworktitle">
                <label for="classe">Homework for </label>
                <input type="text" name="classe" id="classe">
                <label for="description">Homework Description</label>
                <textarea name="description" id="description"></textarea>
                <label for="date">Date</label>
                <input type="date" name="date" id="date">
                <button type="submit" name="submit" class="button1">Add homework</button>
            </form>
        </div>
    </div>
</body>
</html>