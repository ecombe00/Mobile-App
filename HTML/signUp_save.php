<?php   
   
   session_start();
    
$username=mysqli_real_escape_string($db,$_POST['username']); 
$password=md5(mysqli_real_escape_string($db,$_POST['password'])); 
   
    $user = "ua203";
	$pass = "UApass10";
	$host = "localhost";
	$db = "ua203";
	$sql = "SELECT COUNT(*) AS USER_COUNT FROM USER WHERE USERNAME = '$username' AND USERPASS = '$password'";
	echo $sql;
	mysql_connect( $host, $user, $pass ) or die("Problem connecting");
	mysql_select_db( $db );
	$result = mysql_query( $sql );
	
	//Get single row
	$row = mysql_fetch_array($result);
	
	$count = $row['USER_COUNT'];
	
	if ( $count == 1 ) {
		$_SESSION["username"] = $username;
        header( 'Location:home.php' );
	} 
		
	mysql_close();

}

?>