<?php
include('dbconnection.php');
$limit=$_POST['num_codes'];
$digits=$_POST['digits'];

$chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
while($limit!=0)
{    
    $res = "";
    for ($i = 0; $i < $digits; $i++) {
        $res .= $chars[mt_rand(0, strlen($chars)-1)];
    }

    echo($res . "<br>");
   $s="insert into passcode values(null,'$res',0)";	
	$r=mysqli_query($con,$s);
    if($r){
        header('location:viewcodes.php');
    }
	else{	
		echo "Not Inserted";
    }
    $limit--;
}




?>