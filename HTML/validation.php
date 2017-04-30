<?php

$db_user = "ua203";
$db_password = "UApass10";
$db_name = "ua203";
$db_host = "localhost";

$con = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($con -> connect_error > 0) {
	 die('Unable to connect to database [' . $con -> connect_error . ']');
}
$uname = $_GET['uname'];

$query = "SELECT USERNAME FROM USER WHERE USERNAME = '$uname'";

$result = mysqli_query($con, $query);
    echo mysqli_num_rows($result);

?>

