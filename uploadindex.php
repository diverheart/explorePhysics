<?php
require 'include/common.php';
if (!isset($_SESSION['admin'])) {
    header('location: index.php');
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">

</head>
<body style="background-image: url(img/img.jpg); background-repeat: no-repeat; background-size: cover;">
	
    <div class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="149.5px" height="50px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="myupload.php">Uploads</a></li>
                        <li class="nav-item active"><a class="nav-link" href="uploadindex.php">Admin Upload</a></li>
                        <li class="nav-item"><a class="nav-link" href="deleteindex.php">Delete Uploads</a></li>
                        <li class="nav-item"><a class="nav-link" href="admin-logout.php">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </div>


    
    
<div class="container">

		<div class="row" style="margin-top: 20px">
			
		<div class="col-md-4"></div>
		<div class="col-md-4" style="padding: 5px;">
		<div style="padding: 20px;border-radius: 20px;
	border-style: solid;
	border-color: black; background-color: rgba(0,0,0,0.5); background-attachment: fixed; background-position: center;">
			<center>
				
				<form method="POST" enctype="multipart/form-data" action="upload_action.php">
                    <div class="form-group" >
	                   <input class="form-control" type="file" name="file" style="border: none;">
	                </div><br>
	               <br><br>
	               <div class="form-group">
	                <button type="submit" class="btn btn-primary">Upload</button>
	            </div>
	
                </form>

                <button class="btn btn-danger"><a href="index.php" style="color: white;">Home</a></button>



			</center>
		</div>
		</div> 

</div>
<div class="row">
	<div class="col-md-4"></div>
    <div class="col-md-4"><center><h4 style="font-family: 'Comic Neue', cursive; color: #FF0000;">Try not to keep any underscores in the file name and keep it as short and specific as possible.</h4></center></div>
	<div class="col-md-4"></div>
</div>
</div>
</body>
</html>	