<?php

   if($_POST["action"] == "delete-button")
   {
   	if(file_exists($_POST["path"]))
   	{
   		unlink($_POST["path"]);
   		echo "File deleted. Refresh the page to see updates";
   	}
   }



?>