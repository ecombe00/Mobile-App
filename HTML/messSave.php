<?php
       session_start();

	$message  = $_GET["message"];
	$username = $_SESSION["username"];

	
	$user = "ua203";
	$pass = "UApass10";
	$host = "localhost";
	$db = "ua203";
	$sql = "INSERT INTO MESSAGE VALUES ( NULL, '$username', '$message', CURDATE() )";
	
	mysql_connect( $host, $user, $pass ) or die("Problem connecting");
	mysql_select_db( $db );
	mysql_query( $sql );

echo "";
	mysql_close();
	
	

	
?>

