<?php


        session_start();
if(!isset($_COOKIE['mail'])){
header('location:login.php');}
date_default_timezone_set('Asia/Kolkata');

	$con = mysqli_connect('localhost','ROHIT','PASSWORD');
        mysqli_select_db($con,'userregistration');
        
       
        $str= $_POST["uname"];
        $mail=$_SESSION['username'];
        $s = "select * from usertable where email = '$mail'";
         $result = mysqli_query($con, $s);
       
        while($row = $result->fetch_assoc()) {
        
            
        
               
                $p=$row["name"];
                
               
                
             }
		
        
        
        $s = "select * from usertable where name = '$ps'";
	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);
		if($num ==1)
		{
		echo '<script>alert("Name already taken")</script>';
		header('location:edit.php');
		}
		else

        
        
        
      {  
       $s = "UPDATE usertable SET name='$str' WHERE  email = '$mail'";
       
         $result1 = mysqli_query($con, $s);
                  
         $s = "UPDATE comment SET username='$str' WHERE  username = '$p'"; 
       
        $result3 = mysqli_query($con, $s);
       
        header('location:edit.php');}
      
       
       
       
        ?>
        
