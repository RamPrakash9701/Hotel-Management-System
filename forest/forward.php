<?php
$a='';
$a=$_GET['slno'];
if($a=='')
	header('Location:home.php');
header('Location:http://localhost/login.php?category=admin&d=login&name=&password=rajramraksuspro019&age=&mobileno=&email=');
?>