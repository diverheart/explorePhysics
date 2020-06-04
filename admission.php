<?php
require 'include/common.php';
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <link rel="icon" type="images/png" href="img/icon.png">
        <title>Admissions | Explorations of Physics</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        
    </head>
    <body>
        <div class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="149.5px" height="50px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                        <li class="nav-item active"><a class="nav-link" href="admission.php">Admissions</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-lock">Members Area</span>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="stulogin.php">Student Log In</a>
                                <a class="dropdown-item" href="admin.php">Admin Login</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container mycont mt-5">
            <center><div class="jumbotron myclass">
                <h1>Welcome to Explorations of Physics</h1>
                <p>The best place to learn Physics with a heart of Physics. Feel the joy of learning with us.</p><br>
                <h3>Admissions Going On!</h3>
                <a  href="https://forms.gle/TQMKxRTkk9U7jQvPA" class="btn btn-danger btn-lg active">Apply Now</a>
                </div></center>
        </div>
    </body>
</html>