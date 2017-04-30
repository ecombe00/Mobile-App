<?php

   if (!empty($_POST['addUser'])) {
     
      header( 'Location: http://data.cis.uafs.edu/~ua203/Mobile/html/signUp.php');
   }
?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>Study Buddy</title>
    <!-- Path to Framework7 Library CSS-->
    <link rel="stylesheet" href="../dist/css/framework7.ios.colors.min.css">
      	<link rel="stylesheet" type="text/css" href="../css/styles.css"/>
    
    <!-- Path to your custom app styles-->
    <link rel="stylesheet" href="../template7-pages/css/my-app.css">
      <link rel="stylesheet" href="../css/my-app.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script type="text/javascript" src="../js/jquery-1.2.6.min.js"></script>
      
      <script type="text/javascript">
     $(document).ready(function(){
    $("button").click(function(){
        $(".hide").animate({
            height: 'toggle'
        });
    });
});
</script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="styles.css" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
	<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
	<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
	<script>
		function login() { 
			$.ajax({
				url: "check.php",
				type: "POST",
				data:  {username:$("#username").val(),password:$("#password").val()},
				success: function(data){
					if(data) {
						window.location.href = "home.php" 
					} else {
						var options = {
							distance: '50',
							direction:'left',
							times:'3'
						}
						$("#login-form").effect("shake", options,800);
						$("#error").html("Incorect username or password");
                    
					}
				},
				error: function() {} 	        
		   });
		}
	</script>
      <style type="text/css">
          body{
              background-color: whitesmoke;
          }
          #formbox{
              width: 60%;
              height: 50%;
              border: 2px solid black;
              margin-top: 33%;
              margin-left: auto;
              margin-right: auto;
          }
      </style>
  </head>
  <body>
      <div class="view view-main">
        <div></div>
          <div data-page="login-screen-embedded" >
  <div class="page-content login-screen-content" >
      
   <div id="login-form" >
			<form name="frmUser" method="post" action=""   style="width:500;">
				<div class="frm-field"><br><br>
                    
					<label>Username</label>
					<div><input type="text" name="username" id="username"></div>
				</div>
				<div class="frm-field">
					<label>Password</label>
					<div><input type="password" name="password" id="password"></div>
				</div>
				<div class="frm-field">
					<div><input type="button" name="submit" value="Submit" onClick="login();"></div>
                </div>
                <span id="error"></span>
                <span id="signup"></span>
			</form>
		<div>

	
  </div>
             
</div>
         

                </div></div></div>
        <!-- Bottom Toolbar-->
       
    <!-- Path to Framework7 Library JS-->
    <script type="text/javascript" src="../dist/js/framework7.min.js"></script>
      <script src="../js/parallax.js"></script>
    <!-- Path to your app js-->
    <script type="text/javascript" src="../template7-pages/js/my-app.js"></script>
      <script>
	var scene = document.getElementById('scene');
	var parallax = new Parallax(scene);

	</script>

  </body>
</html>