<?php
   

	session_start();
    unset($_SESSION["username"]);
	session_destroy();
   
      header( 'Location:http://data.cis.uafs.edu/~ua203/Mobile/html/index.php');

?>