
  <?php
     
     session_start();

       if(!isset($_SESSION["username"])){
            header('Location: http://data.cis.uafs.edu/~ua203/Mobile/html/index.php');
          }

        

    if (!empty($_POST['submit'])) {
     
     $username =$_SESSION["username"];
     $sub = $_POST["subject"];
     $flashN = $_POST["flashname"];
     $question = $_POST["question"];
     $answer = $_POST["answer"];
     
     
    
  
    $user = "ua203";
	$pass = "UApass10";
	$host = "localhost";
	$db = "ua203";
	$sql = "INSERT INTO FLASH_CARDS VALUES ( NULL, '$username', '$sub', '$flashN', '$question', '$answer', CURDATE()  ) ";

	mysql_connect( $host, $user, $pass ) or die("Problem connecting");
	mysql_select_db( $db );
	$result = mysql_query( $sql );
     mysql_close();
    }

  if (!empty($_POST['addNotes'])) {
     
     $username =$_SESSION["username"];
     $sub = $_POST["subject"];
     $topic = $_POST["topic"];
     $note = $_POST["notes"];
     
    $user = "ua203";
	$pass = "UApass10";
	$host = "localhost";
	$db = "ua203";
	$sql = "INSERT INTO NOTES VALUES ( NULL, '$username', '$sub', '$topic', '$note', CURDATE() ) ";

	mysql_connect( $host, $user, $pass ) or die("Problem connecting");
	mysql_select_db( $db );
	$result = mysql_query( $sql );
     mysql_close();
    }

if (!empty($_POST['logout'])) {
     
    session_start();
    $_SESSION["username"] = " ";
    session_destroy();
    
    
    header( 'Location: http://data.cis.uafs.edu/~ua203/Final/html/index.php');
    }


  
   
?>
<?php
   require('header.php');
?>

  <body id="scrooler" >
    <!-- Status bar overlay for fullscreen mode-->
    <div class="statusbar-overlay"></div>
    <!-- Panels overlay-->
    <div class="panel-overlay"></div>
    <!-- Left panel with reveal effect-->
    <div class="panel panel-left panel-reveal">
      <div class="content-block">
         <div style="font-size:18px; color:#7F82F5; border-bottom:2px solid #7F82F5;">
             <?=$_SESSION["username"]?> is logged in
          </div><br>
           <div id="account"><a href="#index" >Home</a></div>
          <div id="account"><a href="#services" >Flash Cards</a></div>
          <div id="account"><a href="#notes" >Notes</a></div>
         
           <div id="account">
               <form method="post">
                   <input type="submit" name="logout" value="Logout" style="background-color:#474ADE; border:2px solid gray; width:200px; font-size:15px;
                                                                            color:whitesmoke; margin-bottom:13%;"/>
               </form>
          </div>
          <br><br>
          
      </div>
    </div>
    <!-- Right panel with cover effect-->
    <div class="panel panel-right panel-cover">
      <div class="content-block">
        <p>Right panel content goes here</p>
      </div>
    </div>
    <!-- Views-->
    <div class="views">
      <!-- Your main view, should have "view-main" class-->
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar">
          <!-- Navbar inner for Index page-->
          <div data-page="index" class="navbar-inner" style="background-color:black; color:white;">
              <div class="left">
            <a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a>
            </div>
              <div class="center sliding" >Study Buddy</div>
            <div class="right">
               
              </div>
          </div>
          <!-- Navbar inner for About page-->
          
          <!-- Navbar inner for Services page-->
            <!--------flash cards------->
          <div data-page="services" class="navbar-inner cached" style="background-color:black; color:whitesmoke;">
            <div class="left sliding"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding" >Study Buddy</div>
              <div class="right sliding"> <a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a></div>
          </div>
            <!-----------notes------------------>
             <div data-page="notes" class="navbar-inner cached" style="background-color:black; color:whitesmoke;">  
            <div class="left sliding"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">Study Buddy</div>
            <div class="right sliding"> <a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a></div>
          </div>
            <!----------other-------------------->
             <div data-page="form" class="navbar-inner cached" style="background-color:black; color:whitesmoke;" >
            <div class="left sliding"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
            <div class="center sliding">Study Buddy</div>
            <div class="right sliding"> <a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a></div>
          </div>
          <!-- Navbar inner for Form page-->
          
        </div>
        <!-- Pages, because we need fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
          <!-- Index Page-->
          <div data-page="index" class="page">
            <!-- Scrollable page content-->
            <div class="page-content">
            
              <div class="content-block">
                <div class="content-block-inner">
                  
                    <div class="your-class">
                    <div><img src="../img/English-Literature.jpg"/></div>
                    <div><img src="../img/COMPUTERSCIENCE.jpg"/></div>
                    <div><img src="../img/history.jpg"/></div>
                    </div>
                
               
              </div>
              <div class="list-block">
                <ul>
                  <li><a href="#notes" class="item-link">
                      <div class="item-content">
                        <div class="item-inner"> 
                          <div class="item-title">Take Notes</div>
                        </div>
                      </div></a></li>
                  <li><a href="#services" class="item-link">
                      <div class="item-content"> 
                        <div class="item-inner">
                          <div class="item-title">Flash Cards</div>
                        </div>
                      </div></a></li>
                </ul>
              </div>
              
              <div >
             
              </div>
                
            </div>
                <div class="mainMess_div" ng-app="demo" ng-controller="ItemsCtrl">
               <h1 style="margin-left:13%;">What's on your mind?</h1>
              <div class="showMess" id="chat" scroll-glue="glued">
                    </div>    
        <div>
              <form action="messSave.php" method="GET" style="margin-left:7%;">
                    <textarea id= "message" name="message" rows="4" cols="36" placeholder="Whats on your mind?"></textarea><br><br>
                    <input type="button" value="Post" class="submitM" style="background-color:#4d4dff; 
                                                                             border:1px solid black;">
                </form>
        </div>
                </div></div>
          <!-- Note Page-->
          <div data-page="notes" class="page cached" >
            <div class="page-content">
              <div class="content-block">
                  <form method="post">
              <div class="list-block">
                <ul>
                  <li>
                   <div class="item-content">
                      <div class="item-media"><i class="fa fa-archive fa-2x" style="color:green;"></i></div>
                      <div class="item-inner"> 
                        <div class="item-title label">Subject</div>
                        <div class="item-input">
                          <select name="subject">
                            <option value="Science">Science</option>
                              <option value="History">History</option>
                              <option value="Math">Math</option>
                              <option value="IT">IT</option>
                              <option value="English">English</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                        <div class="item-content">
                      <div class="item-media"><i class="fa fa-sticky-note fa-2x" style="color:red;"></i></div>
                      <div class="item-inner"> 
                        <div class="item-title label">Topic</div>
                        <div class="item-input">
                          <input type="text"  name="topic">
                        </div>
                      </div>
                    </div>
                    
                  </li>
                  <li class="align-top">
                    <div class="item-content" style="height:300px;">
                      <div class="item-media"><i class="fa fa-paperclip fa-2x" style="color:blue;"></i></div>
                      <div class="item-inner" style="height:300px;"> 
                        <div class="item-title label">Notes</div>
                        <div class="item-input">
                          <textarea class="cbox" rows="30" cols="30" name="notes" style="height:300px;"></textarea>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                   <li>
                       <div class="content-block">
                <div>
                
                  <div class="content-block">
                <div class="row">
                  <div class="col-50"><a href="#viewnotes" id="blueButtons"  class="button button-big button-fill color-red" style="font-size:18px;">Review Notes</a></div>
                  <div class="col-50">
                    <input type="submit" value="Save Notes" id="blueButtons" class="button button-big button-fill color-green" name="addNotes">
                  </div>
                </div>
              </div>
                    
                </div>
                    </li>
                      </div></form></div></div></div>
              </div>
          <!-- Flash Card Page-->
            <div id="wrapper">
                <div id="scrooler">
          <div data-page="services" class="page cached">
            <div class="page-content">
              <div class="content-block">
                  <h1 style="text-align:center; text-decoration: underline; color: mediumblue;">Subject</h1>
              <div class="list-block" id="picBox">
                  <section>
                  <div data-stellar-ratio="1"><a href="#history"><img src="../img/history.png"/></a></div>
                   <div data-stellar-ratio="2"><a href="#computer"><img src="../img/comp.png"/></a>
                   <div data-stellar-ratio="3"><a href="#english"><img src="../img/english.png"/></a>
                   <div data-stellar-ratio="4"><a href="#math"><img src="../img/math.png"/></a>
                  <div data-stellar-ratio="5"><a href="#science"><img src="../img/science.png"/></a>
                 
              </div></section>
              <div class="content-block">
                
                  <div class="col-50"><a href="#services1" id="blueButtons"  class="button button-big button-fill color-red">Add Flash Card</a></div>
                  
                  
                </div>
              </div>
              </div>
            </li>
              </ul>
              </div></div></div>
         
          
          

        <!---------Add new flash card---------------->
        <div data-page="services1" class="page cached">
            <div class="page-content">
              <div class="content-block">
                  <form method="post">
              <div class="list-block">
                <ul>
                  <li>
                   <div class="item-content">
                      <div class="item-media"><i class="fa fa-archive fa-2x" style="color:green;"></i></div>
                      <div class="item-inner"> 
                        <div class="item-title label">Subject</div>
                        <div class="item-input">
                          <select name="subject">
                            <option value="Science">Science</option>
                              <option value="History">History</option>
                              <option value="Math">Math</option>
                              <option value="IT">IT</option>
                              <option value="English">English</option>
                              
                          </select>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                        <div class="item-content">
                      <div class="item-media"><i class="fa fa-sticky-note fa-2x" style="color:red;"></i></div>
                      <div class="item-inner"> 
                        <div class="item-title label">Name</div>
                        <div class="item-input">
                          <input type="text" placeholder="Flash Cards Name" name="flashname">
                        </div>
                      </div>
                    </div>
                    
                  </li>
                  <li class="align-top">
                    <div class="item-content">
                      <div class="item-media"><i class="fa fa-question-circle fa-2x" style="color:blue;"></i></div>
                      <div class="item-inner"> 
                        <div class="item-title label">Question</div>
                        <div class="item-input">
                          <textarea class="cbox" rows="5" cols="30" name="question"></textarea>
                        </div>
                      </div>
                    </div>
                  </li>
                     <li class="align-top">
                    <div class="item-content">
                      <div class="item-media"><i class="fa fa-share fa-2x" style="color:blue;"></i></div>
                      <div class="item-inner"> 
                        <div class="item-title label">Answer</div>
                        <div class="item-input">
                          <textarea class="cbox" rows="5" cols="30" name="answer"></textarea>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                   <li>
                       <div class="content-block">
                <div>
                
                  <div class="col-50">
                    <input type="submit" value="Add Card" id="blueButtons" class="button button-big button-fill color-green" name="submit">
                  </div>
                </div>
                    </li>
                      </div></form></div></div></div></div>
                <!--------------History flashcards--------->
                <div data-page="history" class="page cached" >
                    <div class="page-content infinite-scroll">
                    <?php
                         $username = $_SESSION["username"];
             
                       $user = "ua203";
                        $pass = "UApass10";
                        $host = "localhost";
                        $db = "ua203";
                        $sql = "SELECT * FROM FLASH_CARDS WHERE SUBJECT = 'History' and USERNAME = '$username' ";

                       mysql_connect( $host, $user, $pass ) or die("Problem connecting");
                       mysql_select_db( $db );
                       $result = mysql_query( $sql );
             
                        date_default_timezone_set("America/Chicago");
                  

             while ( $row = mysql_fetch_array($result) ) {
              ?>        
                     <div class="flipcard h" id="cardbox">
                        <div class="front">
                            <span><p style="font-size:18px;">Name:&nbsp;<?=$row['NAME']?>&nbsp;&nbsp;Date:&nbsp;<?=date("M d, Y" ,strtotime($row['DATE']))?></p></span>
                             <h2 id="flashCards_f" style=" margin-bottom:-18%;">Question:</h2>
                            <h1 style="margin-top:17%;" id="flashCards_f"><?=$row['QUESTION']?></h1>
                        </div>
                        <div class="back">
                            <h2 id="flashCards_f" style="margin-top:18%; margin-bottom:-28%;">Answer:</h2>
                           <h2 style="margin-top:27%;" id="flashCards_f"><?=$row['ANSWER']?></h2>
                        </div>
                    </div>
                   
                    
                <?php
             }
                        ?></div></div>
                <!---------------Computer------------------->
                 <div data-page="computer" class="page cached">
                     <div class="page-content infinite-scroll">
                      <?php
                        
                          $username = $_SESSION["username"];
                         
                       $user = "ua203";
                        $pass = "UApass10";
                        $host = "localhost";
                        $db = "ua203";
                        $sql = "SELECT * FROM FLASH_CARDS WHERE SUBJECT = 'IT' and USERNAME = '$username' ";

                       mysql_connect( $host, $user, $pass ) or die("Problem connecting");
                       mysql_select_db( $db );
                       $result = mysql_query( $sql );
                       
                      date_default_timezone_set("America/Chicago");
                  

             while ( $row = mysql_fetch_array($result) ) {
              ?>        
                     <div class="flipcard h" id="cardbox">
                        <div class="front">
                             <span><p style="font-size:18px;">Name:&nbsp;<?=$row['NAME']?>&nbsp;&nbsp;Date:&nbsp;<?=date("M d, Y" ,strtotime($row['DATE']))?></p></span>
                            <h2 id="flashCards_f" style=" margin-bottom:-18%;">Question:</h2>
                            <h1 style="margin-top:17%;" id="flashCards_f"><?=$row['QUESTION']?></h1>
                        </div>
                        <div class="back">
                             <h2 id="flashCards_f" style="margin-top:18%; margin-bottom:-28%;">Answer:</h2>
                           <h2 style="margin-top:27%;" id="flashCards_f"><?=$row['ANSWER']?></h2>
                        </div>
                    </div>
                  
                    
                <?php
             }
                 ?>
                     </div></div>
                <!-------------English--------------------->
                 <div data-page="english" class="page cached">
                     <div class="page-content infinite-scroll">
                      <?php
                       $username = $_SESSION["username"];
                         
                       $user = "ua203";
                        $pass = "UApass10";
                        $host = "localhost";
                        $db = "ua203";
                        $sql = "SELECT * FROM FLASH_CARDS WHERE SUBJECT = 'English' and USERNAME = '$username' ";

                       mysql_connect( $host, $user, $pass ) or die("Problem connecting");
                       mysql_select_db( $db );
                       $result = mysql_query( $sql );
                         date_default_timezone_set("America/Chicago");
                  

             while ( $row = mysql_fetch_array($result) ) {
              ?>        
                     <div class="flipcard h" id="cardbox">
                        <div class="front">
                            <span><p style="font-size:18px;">Name:&nbsp;<?=$row['NAME']?>&nbsp;&nbsp;Date:&nbsp;<?=date("M d, Y" ,strtotime($row['DATE']))?></p></span>
                             <h2 id="flashCards_f" style=" margin-bottom:-18%;">Question:</h2>
                            <h1 style="margin-top:17%;" id="flashCards_f"><?=$row['QUESTION']?></h1>
                        </div>
                        <div class="back">
                            <h2 id="flashCards_f" style="margin-top:18%; margin-bottom:-28%;">Answer:</h2>
                           <h2 style="margin-top:27%;" id="flashCards_f"><?=$row['ANSWER']?></h2>
                        </div>
                    </div>
                  
                    
                <?php
             }
                 ?>
                     </div></div>
                <!-----------------math----------------------->
                 <div data-page="math" class="page cached">
                     <div class="page-content infinite-scroll">
                     <?php
                       $username = $_SESSION["username"];
                         
                       $user = "ua203";
                        $pass = "UApass10";
                        $host = "localhost";
                        $db = "ua203";
                        $sql = "SELECT * FROM FLASH_CARDS WHERE SUBJECT = 'Math' and USERNAME = '$username' ";

                       mysql_connect( $host, $user, $pass ) or die("Problem connecting");
                       mysql_select_db( $db );
                       $result = mysql_query( $sql );
                         date_default_timezone_set("America/Chicago");
                      
                  

             while ( $row = mysql_fetch_array($result) ) {
              ?>        
                     <div class="flipcard h" id="cardbox">
                        <div class="front">
                            <span><p style="font-size:18px;">Name:&nbsp;<?=$row['NAME']?>&nbsp;&nbsp;Date:&nbsp;<?=date("M d, Y" ,strtotime($row['DATE']))?></p></span>
                             <h2 id="flashCards_f" style=" margin-bottom:-18%;">Question:</h2>
                            <h1 style="margin-top:17%;" id="flashCards_f"><?=$row['QUESTION']?></h1>
                        </div>
                        <div class="back">
                            <h2 id="flashCards_f" style="margin-top:18%; margin-bottom:-28%;">Answer:</h2>
                           <h2 style="margin-top:27%;" id="flashCards_f"><?=$row['ANSWER']?></h2>
                        </div>
                    </div>
                  
                    
                <?php
             }
                 ?>
                     </div></div>
                <!-----------------science------------------->
                    <div data-page="science" >
                 <div data-page="science" class="page cached">
                     <div class="page-content infinite-scroll">
                     <?php
                        $username = $_SESSION["username"];
                         
                       $user = "ua203";
                        $pass = "UApass10";
                        $host = "localhost";
                        $db = "ua203";
                        $sql = "SELECT * FROM FLASH_CARDS WHERE SUBJECT = 'Science' and USERNAME = '$username' ";

                       mysql_connect( $host, $user, $pass ) or die("Problem connecting");
                       mysql_select_db( $db );
                       $result = mysql_query( $sql );
                         date_default_timezone_set("America/Chicago");
                      
                  

             while ( $row = mysql_fetch_array($result) ) {
              ?>        
                     <div class="flipcard h" id="cardbox">
                        <div class="front">
                             <span><p style="font-size:18px;">Name:&nbsp;<?=$row['NAME']?>&nbsp;&nbsp;Date:&nbsp;<?=date("M d, Y" ,strtotime($row['DATE']))?></p></span>
                             <h2 id="flashCards_f" style=" margin-bottom:-18%;">Question:</h2>
                            <h1 style="margin-top:17%;" id="flashCards_f"><?=$row['QUESTION']?></h1>
                        </div>
                        <div class="back">
                            <h2 id="flashCards_f" style="margin-top:18%; margin-bottom:-28%;">Answer:</h2>
                           <h style="margin-top:27%;" id="flashCards_f"><?=$row['ANSWER']?></h2>
                        </div>
                    </div>
                  
                    
                <?php
             }
                 ?>
                        
                         <!-------view notes------------------->
        <div data-page="viewnotes" class="page cached">
            <div class="page-content">
                <div id="notes"></div>
              <div class="content-block">
                   <?php
                    
                       $username = $_SESSION["username"];
                       
                        $user = "ua203";
                        $pass = "UApass10";
                        $host = "localhost";
                        $db = "ua203";
                        $sql = "SELECT * FROM NOTES WHERE USERNAME= '$username' ";

                       mysql_connect( $host, $user, $pass ) or die("Problem connecting");
                       mysql_select_db( $db );
                       $result = mysql_query( $sql );
                     
                      
                       

             while ( $row = mysql_fetch_array($result) ) {
              ?>        
                       <div class="list-block">
                            
                <ul>
                  <li>
                   <div class="item-content">
                      <div class="item-media"><i class="fa fa-archive fa-2x" style="color:green;"></i></div>
                      <div class="item-inner"> 
                        <div class="item-title label">Subject</div>
                        <div class="item-input">
                        <p><?=$row['SUBJECT']?></p>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                        <div class="item-content">
                      <div class="item-media"><i class="fa fa-sticky-note fa-2x" style="color:red;"></i></div>
                      <div class="item-inner"> 
                        <div class="item-title label">Topic</div>
                        <div class="item-input">
                          <p><?=$row['TOPIC']?></p>
                        </div>
                      </div>
                    </div>
                    
                  </li>
                  <li class="align-top">
                    <div class="item-content">
                      <div class="item-media"><i class="fa fa-paperclip fa-2x" style="color:blue;"></i></div>
                      <div class="item-inner"> 
                        <div class="item-title label">Notes:</div>
                        <div class="item-input">
                          <textarea class="cbox" rows="30" cols="30" name="question" style="height:300px;"><?=$row['NOTE']?></textarea>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                          
                  </div>
                       
                  
                    
                <?php
             }
                 ?>
                  </div></div></div>
                         
    <!-- Path to Framework7 Library JS-->
    <script type="text/javascript" src="../dist/js/framework7.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../slick/slick.min.js"></script>
				          
    

    <script type="text/javascript" src="../js/my-app.js"></script>
         
    <script type="text/javascript">
    $(document).ready(function(){
      $('.your-class').slick({
       dots: true,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  autoplay: true,
  autoplaySpeed: 3000,
      });
    });
  </script>
    <script src="jquery.js"></script>
<script src="jquery.flip.js"></script>                
  <script type="text/javascript">
      $("#card").flip({
  axis: 'x',
  trigger: 'hover'
});
                    </script>
                        
  </body>
</html>