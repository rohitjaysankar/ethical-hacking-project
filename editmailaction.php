<?php
	
	
session_start();
if(!isset($_COOKIE['mail'])){
header('location:login.php');}
date_default_timezone_set('Asia/Kolkata');



	
	
	
	
	$con = mysqli_connect('localhost','ROHIT','PASSWORD');
        mysqli_select_db($con,'userregistration');
        
        
        $str= $_POST["emailid"];
        $mail=$_SESSION['username'];
        
       
        
        
        
        
        
        
        
        
       $s = "UPDATE usertable SET email='$str' WHERE  email = '$mail'";
       
         $result1 = mysqli_query($con, $s);
                  
          $_SESSION['username']=$str;   
          header('location:edit.php'); 
       
       
       
        ?>
               
       
       
        
        
        
        
        
        
        
        
       
       
       
        ?>
