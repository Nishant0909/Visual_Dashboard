<?php
   $con = mysqli_connect("localhost","Nishant","Jain","visual_dashboard");
//    $con = mysqli_connect('localhost',"angelskin_angel","1234@AngelKingdom","angelskin_angel");
   

   // Check connection
   if (mysqli_connect_errno()) {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     exit();
   } else {
      echo "Connected";
   }
?>