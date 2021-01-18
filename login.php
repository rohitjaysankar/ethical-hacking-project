<html>
<head>
<title>User Login And Registration</title>
<link rel="stylesheet" href="stylesheet1.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"  >
<link rel="stylesheet" href="stylesheet1.css">
<?php
session_start();
if(isset($_COOKIE['mail'])){
header('location:home.php');}
date_default_timezone_set('Asia/Kolkata');


?>

</head>
<body>
<div class="container">
     <div class="login-box">

		<div class="row">
			<div class="col-md-6 login-left">
				<h2>Login Here </h2>
				<form action="validation.php" method="post">
					<div class="form-group">
					<label>Mail id</label>
					<input type="email" name="mail" class="form-control" required>
					</div>
					
					<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
					
		</div>
	</div>

</div>
</body>
</html>
