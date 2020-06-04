<?php
require 'include/common.php';
if (!isset($_SESSION['student'])) {
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

<style type="text/css">
    .card-box{
    border-radius: 20px;
    border-style: solid;
    border-color: black;
    height: 200px;
    background-color: rgba(0,0,0,0.3);
    overflow-x: hidden;
    overflow-y: hidden;


}
h4{
    color: #00FFFF;
}
a{
    text-decoration: none;
    color: white;
}
</style>

</head>
<body style="background-image: url(img/img.jpg); background-color: rgba(0,0,0,0.4); background-repeat: no-repeat; background-size: cover;">


 <div class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="149.5px" height="50px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="student-logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>


	<div class="container-fluid">


        <center><h2 style="color: red; font-family: 'Comic Neue', cursive;">Students' Page</h2></center>
	    <div class="row" style="padding: 10px;">
		
		<div class="col-md-12" style="padding: 10px; ">
            <div class="card-box" style="overflow-y: auto;">
			<center>
				<h4>Coaching Uploads</h4>
				<?php

                $files = scandir("uploads");
                for($a = 2; $a<count($files);$a++)
                {
                	?>
                	<p>
                		<a href="uploads/<?php echo $files[$a] ?>"> <?php echo $files[$a] ?> </a>
                	</p>
                    <hr style="width: 100%; color: black; height: 5px;">
                    
                	<?php
                }
?>
			</center>
		</div>
    </div>
        </div>
    </div>

</body>
</html>