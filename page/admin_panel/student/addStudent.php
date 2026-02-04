<?php
require_once __DIR__ ."/../../dbconnection.php";
if(isset($_POST['submit'])){
    if(isset($_POST['studentname'])&&isset($_POST['studentemail'])&&
    isset($_POST['studentclass'])&&isset($_POST['gender'])&&
    isset($_POST['dob'])&&isset($_POST['studentid'])&&
    isset($_POST['fatherName'])&&isset($_POST['mothername'])&&
    isset($_POST['parentContact'])&&isset($_POST['alternatecontact'])&&
    isset($_POST['address']))
    {
        if($_POST['studentname']==""||$_POST['studentemail']==""||
        $_POST['studentclass']==""||$_POST['gender']==""||
        $_POST['dob']==""||$_POST['studentid']==""||
        $_POST['fatherName']==""||$_POST['mothername']==""||
        $_POST['parentContact']==""||$_POST['alternatecontact']==""||
        $_POST['address']=="")
        {
            echo"<script> alert('please fill all the fields')</script>";
        }else{
        $studentname=$_POST['studentname'];
        $studentemail=$_POST['studentemail'];
         $studentclass=$_POST['studentclass'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        $fatherName=$_POST['fatherName'];
        $mothername=$_POST['mothername'];
        $parentContact=$_POST['parentContact'];
        $alternatecontact=$_POST['alternatecontact'];
        $address=$_POST['address'];
   
        $sql="INSERT INTO student_information(studentname,studentmail,studentclasse,dateofbirthday,gender,fathername,mothername,contactnumber,alternative,addresse) VALUES(?,?,?,?,?,?,?,?,?,?)";
        $mtc=$db->prepare($sql);
        $resultat= $mtc->execute([ $studentname,$studentemail, $studentclass,$dob, $gender,$fatherName, $mothername, $parentContact, $alternatecontact,  $address]);
    if($resultat){
    echo "<script> alert('add student succes ')</script>";
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
    <link rel="stylesheet" href="student.css">
    <title>Document</title>
</head>
<body style="margin=80px;padding=0" class="body1">
     <div class="page-with-sidebar">
        <?php
        $base_path = '../../';
        include '../../sidebar.php';
        ?>
          <h1><?php echo"Add student";?></h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="allDetail">
                    <div class="detailStudent">
                        <h3><?php echo"Student details";?></h3>
                        <label for="studentname">Student Name</label>
                        <input type="text" name="studentname" id="studentname">

                        <label for="studentemail">Student Email</label>
                        <input type="email" name="studentemail" id="studentemail">

                        <label for="studentclass">Student Class</label>
                        <input type="text" name="studentclass" id="studentclass">

                        <label for="gender">Gender</label>
                        <select name="gender" id="gender">
                            <option value="">Gender</option>
                            <option value="homme">Homme</option>
                            <option value="femme">Femme</option>
                        </select>

                        <label for="dob">Date of Birth</label>
                        <input type="date" name="dob" id="dob">

                        <label for="studentid">Student ID</label>
                        <input type="text" name="studentid" id="studentid">    
                 </div>
                  <div class="detailParents">
                    <h3><?php echo"Parents details";?></h3>
                    
                    <label for="fatherName">Father's Name</label>
                    <input type="text" name="fatherName" id="fatherName">

                    <label for="mothername">Mother's Name</label>
                    <input type="text" name="mothername" id="mothername">

                    <label for="parentContact">Parent Contact</label>
                    <input type="text" name="parentContact" id="parentContact">

                    <label for="alternatecontact">Altenate Contact number</label>
                    <input type="text" name="alternatecontact" id="alternatecontact">

                    <label for="address">Adress</label>
                    <input type="text" name="address" id="address">
                </div>
                </div>
                <div class="loginAll">
                    <div class="logindetail"> 
                        <label for="logindetail">Login Details</label>
                        <input type="text" name="logindetail" id="logindetail" style="width: 500px;height: 40px;">
                    </div>
                    <div class="password">
                        <label for="pwd">Password</label>
                        <input type="password" nma="pwd" id="pwd"  style="width: 500px;height: 40px;"> 
                    </div>
                </div>
                <button type="submit" name="submit" class="button">Add </button>
                </form>
            

        </div>
   
    
</body>
</html>