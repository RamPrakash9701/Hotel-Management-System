<?php
$slno=$_GET["slno"];
$conn=mysqli_connect("localhost","root","","forest") or die(mysqli_error());
$data="delete from forestdata WHERE slno='$slno'";
$val=mysqli_query($conn,$data); 
mysqli_close($conn);

$n="SELECT name FROM forestdata WHERE slno=$slno";
$m=mysqli_query($conn,$n); 
$o=mysqli_fetch_assoc($m);
$fname=$o['name'];

$dat="DELETE FROM plantation where fname='$fname'";
$v=mysqli_query($conn,$dat); 
mysqli_close($conn);
header('Location:http://localhost/login.php?category=admin&d=login&name=&password=rajramraksuspro019&age=&mobileno=&email=');
?>