<?php
require ("include/common.php");

if(isset($_POST['submit']))
{
    // removes backslashes
 $password = stripslashes($_POST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `students` WHERE student_roll='".($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
        $num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
    if ($num == 0) {
        $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
        header('location: stulogin.php?error=' . $error);
    }
    else{
        $row = mysqli_fetch_array($result);
        header('location: upload.php');
        $_SESSION['student'] = $row['student_roll'];
    }
}