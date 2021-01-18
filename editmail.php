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
<div class="container">
     <div class="login-box">

		<div class="row">
			<div class="col-md-6 login-left">
				
				<form action="editmailaction.php" method="post">
					<div class="form-group">
					<label>Email id</label>
					<input type="email" name="emailid" class="form-control" required>
                                       <button type="submit" class="btn btn-primary" name="submit">Edit</button>
					</div>
					
				</form>
				
				
				
	       
       
       
       
        
				
				

			</div>
					
		</div>
	</div>

</div>




</body>
</html>
