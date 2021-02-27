<?php
$slno=$_GET['slno'];
$name=$_GET['name'];
$conn=mysqli_connect("localhost","root","","forest") or die(mysqli_error());
$n="SELECT name FROM forestdata WHERE slno=$slno";
$m=mysqli_query($conn,$n); 
$o=mysqli_fetch_assoc($m);
$fname=$o['name'];

$data="DELETE  FROM plantation where fname='$fname' && name='$name'";
mysqli_query($conn,$data); 
mysqli_close($conn);


$conn=mysqli_connect("localhost","root","","forest") or die(mysqli_error());
$data="UPDATE last SET lastreginame='$name' WHERE slno=1";
mysqli_query($conn,$data); 
mysqli_close($conn);
header('Location:http://localhost/login.php?category=public&d=login&name=dupe&password=rajramraksuspro019&age=&mobileno=&email=');
?>