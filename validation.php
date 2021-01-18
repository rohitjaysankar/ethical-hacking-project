<?php
session_start();
header('location:login.php');
$con = mysqli_connect('localhost','ROHIT','PASSWORD');
mysqli_select_db($con,'userregistration');

$mail = $_POST['mail'];
$pass = $_POST['password'];
$s = "select * from usertable where email = '$mail'&& password = '$pass'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1)
{


     setcookie("mail",$mail, time()+ 3600,'/'); // expires after 60 seconds
     
 
     $_SESSION['username']= $mail;
  
header('location:home.php');
}
else
{
header('location:login.php');
}


?>
