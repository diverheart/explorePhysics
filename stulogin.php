<?php
require 'include/common.php';
?>


<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="icon" type="images/png" href="img/icon.png">
        <title>Student Login</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link href="css/login-student.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
    </head>
    <body>
        <div class="container">
            <div class="row row-style">
                <div class="col-xs-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to Access Contents</p>
                            <form action="login_submit.php" method="POST" name="login">
                                <div class="form-group">
                                    <input class="form-control" name="password" type="password" placeholder="Your Coaching Roll No." required>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary" value="Login">Submit</button><?php 
                                    if (isset($_GET['error'])){
                                    echo $_GET['error'];
                                    }?>
                            </form>
                        </div>
                        
                        <div class="panel-footer">
                            <p>Don't have an account? <a href="admission.php">Take Admission</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>