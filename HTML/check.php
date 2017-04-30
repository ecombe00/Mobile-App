<?php
session_start();
$conn = mysql_connect("localhost","ua203","UApass10");
mysql_select_db("ua203",$conn);
	
$query = "SELECT * FROM USER WHERE USERNAME='" . $_POST["username"] . "' and PASSWORD = '". $_POST["password"]."'";

$result = mysql_query($query);
$row  = mysql_fetch_array($result);
if(!empty($row)) {
	$_SESSION["username"] = $row["USERNAME"];
	
	echo count($row);
}
?>