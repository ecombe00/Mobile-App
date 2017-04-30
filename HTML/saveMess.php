<?php
session_start();
$conn = mysql_connect("localhost","ua203","UApass10");
mysql_select_db("ua203",$conn);
	
$query = "SELECT * FROM MESSAGE WHERE DATE = CURDATE()";
date_default_timezone_set ("America/Chicago");
$result = mysql_query($query);
$row  = mysql_fetch_array($result);

	  while ( $row = mysql_fetch_array($result) ){
    echo '<font color= "blue">' .($row['USER']). '</font>:'; echo " &nbsp;";
          
	echo '<font color="red">' .($row['MESSAGE']). '</font>'; 
    //echo '<font size="1.2px" color="black">' .date(" h:i", time()) . '</font>'; 
    echo " <hr>"
    ?>
     <br>
<?php
      }
?>

