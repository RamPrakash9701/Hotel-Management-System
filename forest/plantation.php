<?php
$slno=$_GET['slno'];
$status=$_GET['status'];
$time=$_GET['time'];
$datetime=$_GET['datetime'];
if($status!="yes")
{	$datetime="";
$time="";}
$conn=mysqli_connect("localhost","root","","forest") or die(mysqli_error());
$data="UPDATE forestdata SET status='$status',datetime='$datetime',time='$time' WHERE slno='$slno'";
$val=mysqli_query($conn,$data); 
mysqli_close($conn);
header('Location:http://localhost/login.php?category=admin&d=login&name=&password=rajramraksuspro019&age=&mobileno=&email=');
?>