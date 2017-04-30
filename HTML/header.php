<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
      <script src="https://cdn.rawgit.com/nnattawat/flip/v1.0.18/dist/jquery.flip.min.js"></script>
       <script src="js/common/modernizr.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.0/angular.js"></script>
    <script src="https://cdn.rawgit.com/Luegg/angularjs-scroll-glue/master/src/scrollglue.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    
      
<script src="../js/framework7.3dpanels.js"></script>
    <title>Study Buddy</title>
    <!-- BootStrap links-->
      <link rel="stylesheet" type="text/css" href="../slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="../slick/slick-theme.css"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="../css/framework7.3dpanels.css">
      <!-- Path to Framework7 Library CSS-->
    <link rel="stylesheet" href="../dist/css/framework7.ios.css">
    <!-- Path to your custom app styles-->
    <link rel="stylesheet" href="../css/my-app.css">
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab">
  <link rel="stylesheet" href="css/common.css">
      <link rel="stylesheet" href="../css/framework7.3dpanels.css">
     
      <script>
          $(document).ready(function(){
                $(".submitM").click(function(){
                var mess = $("#message").val();
                var dataString = 'message='+mess
                $.ajax({
                type: "GET",
                url: "messSave.php",
                data: dataString,
                cache: false,
                success: function(result){
                $("#message").val(' ');
                

                }
                });
                });
                });
      </script>
      <script>
          $(".showMess").scrollTop($(".showMess")[100].scrollHeight);
      </script>
      
   <script>
     
       var auto_refresh = setInterval(
     function ()
          {
            $('.showMess').load('saveMess.php').fadeIn("slow");
              
            }, 1000); 
          

      </script>
       <script>
      angular
        .module('demo', ['luegg.directives'])
        .controller('ItemsCtrl', function ItemsCtrl($scope, $timeout){
          $scope.items = ['1', '2', '3'];
          var counter = $scope.items.slice(-1)[0];
          $scope.glued = true;
          
          function addItem(){
            $scope.items.push(++counter);
            $timeout(addItem, 1000);
          }
          
          $timeout(addItem, 1000);
        });
    </script>
      
      
  
  </head>
