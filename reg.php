<html>
<head>
<title>User Registration </title>
<link rel="stylesheet" href="stylesheet1.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"  >
<link rel="stylesheet" href="stylesheet1.css">

</head>
<body>
<div class="container">
     <div class="login-box">

		<div class="row">
			
			<div class="col-md-6 login-right">
				<h2>Register Here </h2>
				<form action="registration.php" method="post">
					<div class="form-group">
					<label>Username</label>
					<input type="text" name="user" class="form-control" required>
					</div>
					<div class="form-group">
					<label>email</label>
					<input type="email" name="mail" class="form-control" required>
					</div>
					
					<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required>
					</div>
                                       <div class="form-group">
					<label>Confirm password</label>
					<input type="password" name="passwordconf" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary">Register</button>
				</form>
			</div>
		
		</div>
	</div>

</div>
</body>
</html>
