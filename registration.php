<?php

session_start();

$con = mysqli_connect('localhost','ROHIT','PASSWORD');
mysqli_select_db($con, 'userregistration');

$name= $_POST['user'];
$pass= $_POST['password'];
$mail= $_POST['mail'];
$passconf= $_POST['passwordconf'];



if($pass==$passconf){
$s = "select * from usertable where email = '$mail'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num ==1)
{
echo '<script>alert("Mail already taken")</script>';
header('location:reg.php');
}else
{
$s2 = "select * from usertable";
$result2 = mysqli_query($con, $s2);
$num2 = mysqli_num_rows($result2);
$id=0;
while($num2!=$id)
{
$id=++$id;
}


$reg = "insert into usertable(id,name,email,password) values ('$id','$name','$mail','$pass')";
mysqli_query($con,$reg);

echo '<script>alert("Registration Successfull")</script>';
header('location:login.php');
} }else{
echo '<script>alert("Passwords do not match")</script>';
header('location:reg.php');

}
?>
