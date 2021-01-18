<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');}
?>

<!doctype html>
<head>
         <meta charsheet="UTF-8">
         <title>Local store site</title>
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
	
	<form method="post">
	<label>Search</label>
	<input type="text" name="search">
	<input type="submit" name="submit">
	
	</form>
	
	<?php
	$con = mysqli_connect('localhost','ROHIT','PASSWORD');
        mysqli_select_db($con,'userregistration');
        if(isset($_POST["submit"])){
        $str= $_POST["search"];
        $sth = "select name from usertable where name = '$str'";
        $result = mysqli_query($con, $sth);
       
       
       
        ?>
        <table>
        <tr><th>User</th></tr>
        <tr>
        
       <td> <?php while($row = $result->fetch_assoc()) {
        
        
        
                echo " " . $row["name"]. "<br>";
             }

        }

	?></td>
	</tr>
	</table>
</body>
<?php
mysql_close($con);
?>

</html>

