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
    <link rel="stylesheet" type="text/css" href="css/delstyle.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">

<script src="jquery.js"></script>
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
                        <li class="nav-item"><a class="nav-link" href="upload.php">Uploads</a></li>
                        <li class="nav-item"><a class="nav-link" href="uploadindex.php">Admin Upload</a></li>
                        <li class="nav-item active"><a class="nav-link" href="deleteindex.php">Delete Uploads</a></li>
                        <li class="nav-item"><a class="nav-link" href="admin-logout.php">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </div>

<?php


  
                $files = scandir("uploads/");?>
                <div class="container">
                <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-5" style="padding: 5px;">	
                <div style="padding: 20px;border-radius: 20px;
	         border-style: solid; border-color: black; background-color: rgba(0,0,0,0.5); background-attachment: fixed; background-position: center;">
                <?php
                for($a = 2; $a<count($files);$a++)
                {
                    ?>
                    <div class="row">
                    <div class="col-sm-9">
                    <p style="float: left; color: white !important; text-decoration: none !important;">
                        <a href="uploads/<?php echo $files[$a] ?>"> <?php echo $files[$a] ?> </a>
                    </p></div>
                    
                    <div class="col-sm-3"> <button name="delete-button" class="btn btn-primary delete-button" id="uploads/<?php echo $files[$a] ?>" style="">Delete</button></div>
                    <hr style="width: 100%; color: black; height: 5px;">


                    </div>
                    <?php
                }
                ?>
                <button class="btn btn-danger"><a href="index.php" style="color: white;">Home</a></button>
                </div>
                </div>
                
                </div>
            </div>
  <?php
   
   ?>
  


 
    

</body>
<script>
    $(document).on('click','.delete-button',function(){
        var path = $(this).attr("id");
        var action = "delete-button";
        if(confirm("Are you sure?"))
        {
            $.ajax({
                url:"delete_action.php",
                method:"POST",
                data:{path:path, action:action},
                success:function(data)
                {
                    alert(data);

                }

            });
        }
    });
</script>
</html>






   

   
