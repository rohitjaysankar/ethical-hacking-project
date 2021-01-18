<?php
session_start();
if(!isset($_COOKIE['mail'])){
header('location:login.php');}
date_default_timezone_set('Asia/Kolkata');


?>


<html>
<head>
<title>Edit profile</title>
<link rel="stylesheet" href="stylesheet1.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"  >
<link rel="stylesheet" href="stylesheet1.css">
<link rel="stylesheet" href="stylesheet.css">

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
<?php 
	$mail=$_SESSION['username'];
	
	$con = mysqli_connect('localhost','ROHIT','PASSWORD');
        mysqli_select_db($con,'userregistration');
        $s = "select * from usertable where email = '$mail'";
         $result = mysqli_query($con, $s);
       
        while($row = $result->fetch_assoc()) {
        
            
        
               
                $p=$row["name"];
                $ma=$row["email"];
                
             }
		
	?>
<div class="container">
     <div class="login-box">

		<div class="row">
			<div class="col-md-6 login-left">
				
				<form action="editmail.php" method="post">
					<div class="form-group">
					<label>Mail id</label>
					<input type="text" value=<?php echo $ma?> class="form-control" disabled>
                                       <button type="submit" class="btn btn-primary" name="submit1">Edit</button>
					</div>
					
						</form>
				
				<form action="editname.php" method="post">
					
					
					<div class="form-group">
					<label>Username</label>
					<input type="text" name=""  value=<?php echo $p?>  class="form-control" disabled>
					</div>
					<button type="submit" class="btn btn-primary">Edit</button>
				</form>

			</div>
					
		</div>
	</div>

</div>




</body>
</html>
