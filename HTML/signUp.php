<?php
  
    session_start();

    if (!empty($_POST['join'])) {
     
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
      
    $user = "ua203";
	$pass = "UApass10";
	$host = "localhost";
	$db = "ua203";
	$sql = "INSERT INTO USER VALUES ( NULL, '$name', '$email', '$username', '$password' ) ";

	mysql_connect( $host, $user, $pass ) or die("Problem connecting");
	mysql_select_db( $db );
	$result = mysql_query( $sql );
        
        $_SESSION["username"] = $username;
        header( 'Location: http://data.cis.uafs.edu/~ua203/Final/html/home.php');
     mysql_close();
    }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
      <script type='text/javascript' src='http://code.jquery.com/jquery.min.js'></script>
      <script src="https://cdn.rawgit.com/nnattawat/flip/v1.0.18/dist/jquery.flip.min.js"></script>
       <script src="js/common/modernizr.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script type="text/javascript" src="../js/jquery-1.2.6.min.js"></script>
      <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
            <script type="text/javascript">
            $(document).ready(function () {

            $("#username").blur(function () {
              var username = $(this).val();
              if (username == '') {
                $("#availability").html("");
              }
              else{
                $.ajax({
                  url: "validation.php?uname="+username
                }).done(function( data ) {
                    if(data == 1){
                  $("#availability").html('<img src="../img/wrong.png"><font color="red">Not Avaliable</font></img>');
                         $('#join').prop('disabled', true);
                    }else{
                    $("#availability").html('<img src="../img/tick.gif"><font color="green">Avaliable</font></img>');
                        $('#join').prop('disabled', false);
                    }
                });   
              } 
            });
            });
            </script>
    <title>Study Buddy</title>
    <!-- BootStrap links-->
      <link rel="stylesheet" type="text/css" href="../slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="../slick/slick-theme.css"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
      <!-- Path to Framework7 Library CSS-->
    <link rel="stylesheet" href="../dist/css/framework7.ios.css">
    <!-- Path to your custom app styles-->
    <link rel="stylesheet" href="../css/my-app.css">
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/demo.css">
  </head>
  <body >
    <!-- Status bar overlay for fullscreen mode-->
    <div class="statusbar-overlay"></div>
    <!-- Panels overlay-->
    <div class="panel-overlay"></div>
    <!-- Left panel with reveal effect-->
   
    <!-- Views-->
    <div class="views">
      <!-- Your main view, should have "view-main" class-->
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar">
          <!-- Navbar inner for Index page-->
          <div data-page="index" class="navbar-inner" style="background-color:black; color:white;">
              <div class="left">
            </div>
              <div class="center sliding" style="color:whitesmoke;">Study Buddy</div>
            <div class="right">
            </div>
          </div>
        </div>
        <!-- Pages, because we need fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
         
          <div data-page="index" class="page">
            
            <div class="page-content">
     <form id="demoform-1" class="store-data list-block" method="post">
        <ul>
          <li>
            <div class="item-content">
              <div class="item-media"><i class="icon icon-form-name"></i></div>
              <div class="item-inner"> 
                <div class="item-title label">Name:</div>
                <div class="item-input">
                  <input type="text" placeholder="Name" name="name" id="name" required/>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="item-content">
              <div class="item-media"><i class="icon icon-form-email"></i></div>
              <div class="item-inner"> 
                <div class="item-title label">Email Address:</div>
                  <div class="item-input"> 
                  <input type="email" placeholder="xxxxxxxx@xxxxx" name="email" required id="email"/>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="item-content">
              <div class="item-media"><i class="icon icon-form-password"></i></div>
              <div class="item-inner"> 
                <div class="item-title label">Username</div>
                <div class="item-input">
                    <span><input type="text" placeholder="Username" name="username" id="username" class="check"required/><div id="availability"></div></span>
                    
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="item-content">
              <div class="item-media"><i class="icon icon-form-password"></i></div>
              <div class="item-inner"> 
                <div class="item-title label">Password</div>
                <div class="item-input">
                  <input type="password" placeholder="Password" name="password" required/>
                </div>
              </div>
            </div>
          </li>
            <li>
                 <div width="400" align="left"><div id="status"></div></div>
            </li>
        </ul>
         
          <div class="content-block">
                <div class="row">
                  <div class="col-50"><a href="index.php"  class="button open" id="cancel">Cancel</a></div>
                  <div class="col-50"><input type="submit" value = "Join!" class="button open" id="join" name="join" disabled='disabled' /></div>
                </div>
      </form>
           
            </div>
          </div>
            
             
  </body>
</html>