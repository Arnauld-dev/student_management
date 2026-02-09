<?php
require_once __DIR__ ."/../../dbconnection.php";
if(isset($_POST['submit'])){
    $pagetitle=$_POST["pageTitle"];
    $pagedescription=$_POST["pagedescription"];
    $email=$_POST["email"];
    $phonenumber=$_POST["phonenumber"];
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
        <label for="pageTitle">Page Title</label>
        <input type="text" name="pageTitle" id="pageTitle">
        <label for="pagedescription"> Page Description</label>
        <input type="text" name="pagedescription" id="pagedescription">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="phonenumber">Mobile Number</label>
        <input type="text" name="phonenumber" id="phonenumber">
        <button type="submit" name="submit">Update</button>
    </form>

</body>
</html>