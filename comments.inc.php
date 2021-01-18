<?php


function setComments() {
$con = mysqli_connect('localhost','ROHIT','PASSWORD');
mysqli_select_db($con, 'userregistration');


	if(isset($_POST['commentsubmit'])){
	echo"hello";
	$uid = $_POST['uid'];
	
	$date = $_POST['date'];
	
	$message = $_POST['message'];
	

	    $reg = "insert into comment(username,date,message) values    ('$uid','$date','$message')";
                mysqli_query($con,$reg);
  
	       
		
		
		

	}

}

function getComments()
{
$con = mysqli_connect('localhost','ROHIT','PASSWORD');
mysqli_select_db($con, 'userregistration');

$re=" select * from comment";
$res=mysqli_query($con,$re);

$num = mysqli_num_rows($res);

}
?>
