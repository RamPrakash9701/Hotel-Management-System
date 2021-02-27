<?php
$slno=$_GET["slno"];
$newname=$_GET["newname"];
$newarea=$_GET["newarea"];
$newdistrict=$_GET["newdistrict"];
$newanimals=$_GET["newanimals"];
$newprotectionact=$_GET["newprotectionact"];
$conn=mysqli_connect("localhost","root","","forest") or die(mysqli_error());
$data="UPDATE forestdata SET name='$newname',area='$newarea',district='$newdistrict',animals='$newanimals',protectionact='$newprotectionact',status='',datetime='',time='' WHERE slno='$slno'";
$val=mysqli_query($conn,$data); 
mysqli_close($conn);
header('Location:http://localhost/login.php?category=admin&d=login&name=&password=rajramraksuspro019&age=&mobileno=&email=');
?>