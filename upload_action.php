<?php


   $file = $_FILES["file"];//getting user uploaded file

   move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"]);//saving file in uploads folder

   header("Location: uploadindex.php");

?>