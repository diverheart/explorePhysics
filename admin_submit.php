<?php
require ("include/common.php");

if(isset($_POST['submit']))
{
    // removes backslashes
 $password = stripslashes($_POST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `admin` WHERE user_pass='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
        $num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
    if ($num == 0) {
        $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
        header('location: admin.php?error=' . $error);
    }
    else{
        $row = mysqli_fetch_array($result);
        header('location: uploadindex.php');
        $_SESSION['admin'] = $row['user_pass'];
    }
}