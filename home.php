<?php
session_start();
if(!isset($_COOKIE['mail'])){
header('location:login.php');}
date_default_timezone_set('Asia/Kolkata');


?>

<!doctype html>
<head>
         <meta charsheet="UTF-8">
         <title>Local store site</title>
         <link rel="stylesheet" href="stylesheet.css">
         <style>
textarea {
  width:100%;
  height:80px;
  background-color: #fff;
  resize: none;
}
button{
width:100px;
height:30px;

background-color:#282828;
border:none;
color: #fff;
font-family:arial;
}

table
{
background-color:#fff;
}
</style>
</head>
<body>
	<div class="menu-area">
	<ul>
		<li><a href="home.php">Home</a> </li>
		<li><a href="edit.php">Edit profile</a></li>
		
		
		<li><a href="search.php">Search</a></li>
		
		<li><a href="logout.php">Logout</a></li>
	</ul>
	
	</div>
	
	<h1><?php 
	$mail=$_SESSION['username'];
	
	$con = mysqli_connect('localhost','ROHIT','PASSWORD');
        mysqli_select_db($con,'userregistration');
        $s = "select * from usertable where email = '$mail'";
         $result = mysqli_query($con, $s);
       
        while($row = $result->fetch_assoc()) {
        
            
        
                echo "Welcome   " . $row["name"]. "<br>";
                $p=$row["name"];
                
             }
		
	?></h1>
	  
	
	<form method ='POST'  >
	       <input type='hidden' name='uid' value=<?php echo $p?>>
	       <input type='hidden' name='date' value=<?php echo date('Y-m-d H:m:s') ?> >
	        <textarea  name='message' ccidlass='styled' ></textarea><br>
	        
	        <button type='submit' name='commentsubmit' >Comment</button>
	</form>
	<?php
	
        if(isset($_POST['commentsubmit'])){
	
	$uid = $_POST['uid'];
	
	$date = $_POST['date'];
	
	$message = $_POST['message'];
	

	    $reg = "insert into comment(username,date,message) values    ('$uid','$date','$message')";
                mysqli_query($con,$reg);
  
	       
		
		
		

	}
       
       
        ?>
	
          <table>
        <tr><th>Comments</th></tr>
        <tr>
        
       <td> <?php 	
       $re=" select * from comment";
       $res=mysqli_query($con,$re);
        
        $num = mysqli_num_rows($res);
                 while($row = $res->fetch_assoc()) {
        
            
                echo " " . $row["username"]. "<br>";        
                echo " " . $row["date"]. "<br>";
                echo " " . $row["message"]. "<br>";
            
               }


	?></td>
	</tr>
	</table>
	
	
	
</body>
<?php
mysql_close($con);
?>
</html>

