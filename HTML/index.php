

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>Study Buddy</title>
    <!-- Path to Framework7 Library CSS-->
       <link rel="stylesheet" href="../css/my-app.css">
      <link rel="stylesheet" href="../dist/css/framework7.ios.colors.min.css">
       <link rel="stylesheet" type="text/css" href="../css/styles.css"/>
      
    
    <!-- Path to your custom app styles-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script type="text/javascript" src="../js/jquery-1.2.6.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="js/jquery.min.js"></script>
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
							distance: '30',
							direction:'right',
							times:'3'
						}
						$("#login-form").effect("shake", options,800);
						$("#error").html("Incorrect username and/or password");
                        
					}
				},
				error: function() {} 	        
		   });
		}
        
    
	</script>
      
  </head>
  <body class="indexBack">
      <div class="view view-main">
          <h1 style="color:whitesmoke; margin-left:20%; margin-top:20%;font-size:45px;">Study Buddy</h1>
          <h3 style="color:whitesmoke; margin-left:23%; margin-top:-8%;font-size:17px;">For all of your studying needs.</h3>
         
          <div data-page="login-screen-embedded" >
  <div class="page-content login-screen-content" >
      
   <div id="login-form" class="mainSign">
			<form name="frmUser" method="post" style="width:500;">
                
				<div class="frm-field">
					<label>Username</label>
					<div><input type="text" name="username" id="username" ></div>
				</div>
				<div class="frm-field">
					<label>Password</label>
					<div><input type="password" name="password" id="password" ></div>
				</div>
				<div class="frm-field">
					<div style="margin-left:20%;"><input type="button" name="submit" value="Log In" onClick="login()" class="signUp_button"></div>
                   
                </div>
                 <span id="error"></span>
                
			</form>
           <div  class="signUp">
           <p> Not a member? Sign up and start enjoying this great website.</p>
           <form action="signUp.php" >
               <input type="submit" value="Sign up!" class="signUp_button" >
           </form>
       </div>
		</div>
      
  </div>
    
</div>
         

                </div>
        <!-- Bottom Toolbar-->
       
    <!-- Path to Framework7 Library JS-->
    <script type="text/javascript" src="../dist/js/framework7.min.js"></script>
      <script src="../js/parallax.js"></script>
    <!-- Path to your app js-->
    <script type="text/javascript" src="../template7-pages/js/my-app.js"></script>
          

  </body>
</html>