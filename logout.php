<?php
session_start();
setcookie("mail","", time()- 3600,'/');
session_destroy();
header('location:login.php');
?>
