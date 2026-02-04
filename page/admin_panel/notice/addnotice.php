<?php
    require_once __DIR__ ."/../../dbconnection.php";
    if(isset($_POST['submit'])){
            if(isset($_POST['noticeTitle'])&&isset($_POST['noticefor'])&& isset($_POST['noticemessage'])){
                if($_POST['noticeTitle']==""||$_POST['noticefor']==""||$_POST['noticemessage']==""){
                    echo "<script>alert('Added notice failed')</script>";
                }else{
                      $noticeTitle=$_POST['noticeTitle'];
                    $noticefor=$_POST['noticefor'];
                    $noticemessage=$_POST['noticemessage'];
                    $sql="INSERT INTO notice(noticetitle,noticefor,noticemessage) VALUES(?,?,?)";
                    $statement=$db->prepare($sql);
                    $resultat=$statement->execute([$noticeTitle,$noticefor,$noticemessage]);
           if($resultat){
            echo"<script>alert('Notice added successfully')</script>";
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
    <link rel="stylesheet" href="notice.css">
    <title>Add Notice</title>
</head>
<body style="margin: 0; padding: 0;">
    <div class="page-with-sidebar">
        <?php
        $base_path = '../../';
        include '../../sidebar.php';
        ?>
        
        <div class="main-content-with-sidebar">
            <h1>Add Notice</h1>
            <form action="" method="post">
                <label for="noticeTitle">Notice Title</label>
                <input type="text" name="noticeTitle" id="noticeTitle">
                <label for="noticefor">Notice for class</label>
                <input type="text" id="noticefor" name="noticefor">
                <label for="noticemessage">Notice Message</label>
                <input type="text" name="noticemessage" name="noticemessage">
                <button type="submit" name="submit">Add</button>
            </form>
        </div>
    </div>
</body>
</html>