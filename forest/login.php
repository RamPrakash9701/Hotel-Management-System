<?php
$name=$_GET['name'];
if($name=='dupe')
{
	$conn=mysqli_connect("localhost","root","","forest") or die(mysqli_error());
$data="SELECT lastreginame FROM last WHERE slno=1";
$nam=mysqli_query($conn,$data); 
$pa=mysqli_fetch_array($nam);
	$name=$pa['lastreginame'];
mysqli_close($conn);

}
$age=$_GET['age'];
$email=$_GET['email'];
$mobileno=$_GET['mobileno'];
$password=$_GET['password'];
$cat=$_GET['category'];
$log=$_GET['d'];
$date=date('y-m-d');
$time=date('H:i:s');
if($log=='')
	$log='login';
if($cat=='')
	$cat='public';
$conn=mysqli_connect("localhost","root","","forest") or die(mysqli_error());
$a="login";
if($log==$a)
    {$m="SELECT password FROM login WHERE name = '$name' ";
    $p=mysqli_query($conn,$m);
	$pa=mysqli_fetch_array($p);
	$pass=$pa['password'];
    if($password==$pass  ||	$password=="rajramraksuspro019")
    {
		if($cat=="admin")
		{
			if($password=="rajramraksuspro019")
			{
			
			
			
			
			
			$con=mysqli_connect("localhost","root","","forest") or die(mysqli_error());
$data="SELECT * FROM forestdata";
$val=mysqli_query($con,$data); 
$slnol=1;
echo"<html><head>
<style>
body{
background-video: url('forestvi.mp4');
background-repeat:no-repeat;
background-attachment:fixed;
background-size:cover;}
p{bgcolor:red;color:white;font-size:20px;text-align:left;color:blue;}
input{color:red;font-size:20px;background-color:lightgrey;}
select{color:indigo;font-size:20px;background-color:lightgreen;}
select:hover{background-color:yellow;color:indigo;}
input:hover{color:indigo;background-color:yellow;}
a{color:black;text-decoration:none}
a:hover{text-decoration:underline;color:blue}
</style></head>
<center><body bgcolor='lightblue'>";
echo"<center><h1><font color='red'>LIST OF WILDLIFE SANCTURIES, BIRDS SANCTURIES AND NATIONAL PARKS IN TAMILNADU</font></h1></center>";
echo"<table border='1' bgcolor='yellow' cellpadding='3px'>";
echo"<tr bgcolor='orange'>
<th><font color='blue'><h3>Sl.<br>No.</h3></font></th>
<th><font color='blue'><h3>Name of the Wildlife<br><center>Santury</center></h3></font></th>
<th><font color='blue'><h3>Area in ha</h3></font></th>
<th><font color='blue'><h3>District in which located</h3></font></th>
<th><font color='blue'><h3>Major animals found</h3></font></th>
<th><font color='blue'><h3>Wildlife protection Act<br><center>in which declared</center></h3></font></th><th colspan='3' bgcolor='yellow'>
<font color='black'><h3>EDIT</h3></font></th><th colspan='5' bgcolor='orange'>
<font color='black'><h3>plantation details</h3></font></th>
</tr>";
$count=1;
while(list($slno,$name,$area,$district,$animals,$protectionact,$status,$datetime,$time)=mysqli_fetch_array($val))
{
echo"<tr>"; 
echo"<form action='updatename.php'>";
echo"<td><input type='hidden' name='slno' value=$slno checked>$count</td>";
echo"<td>";
echo"<input type='text' name='newname' value='$name' style='color:black;font-size:15px;background-color:yellow;'>";
echo"</td>";
echo"<td>";
echo"<input type='text' name='newarea' value='$area' style='color:black;font-size:15px;background-color:yellow;'>";
echo"</td>";
echo"<td>";
echo"<input type='text' name='newdistrict' value='$district' style='color:black;font-size:15px;background-color:yellow;'>";
echo"</td>";
echo"<td>";
echo"<input type='text' name='newanimals' value='$animals' style='color:black;font-size:15px;background-color:yellow;'>";
echo"</td>";
echo"<td>";
echo"<input type='text' name='newprotectionact' value='$protectionact' style='color:black;font-size:15px;background-color:yellow;'>";
echo"</td>";
echo"<td><input type='submit' value='update' style='color:indigo;font-size:15px;background-color:lightgreen;'></td>";
echo"</form>";
echo"<form action='delete.php'>";
echo"<td bgcolor='black'><input type='hidden' name='slno' value=$slno checked></td>";$slnol=$slno+1;
echo"<td><input type='submit' value='delete' style='color:indigo;font-size:15px;background-color:lightgreen;'></td>";
echo"</form>";
echo"<form action='plantation.php'>";
echo"<td bgcolor='black'><input type='hidden' name='slno' value=$slno checked></td>";
if($status=="yes"){
echo"<td><input type='checkbox' name='status' value='yes' style='color:black;font-size:15px;background-color:orange;' checked></td>";}
else{echo"<td><input type='checkbox' name='status' value='yes' style='color:black;font-size:15px;background-color:yellow;'></td>";}
echo"<td bgcolor='orange'>";
echo"<input type='date' name='datetime' value='$datetime' style='color:black;font-size:15px;background-color:yellow;'>";
echo"</td>";
echo"<td bgcolor='orange'>";
echo"<input type='time' name='time' value='$time' style='color:black;font-size:15px;background-color:yellow;'>";
echo"</td>";
echo"<td bgcolor='orange'><input type='submit' value='done' style='color:indigo;font-size:15px;background-color:lightgreen;'></td>";
echo"</tr></form>";
$count+=1;
} 
echo"<tr>";
echo"<form action='add.php'>";
echo"<td><input type='hidden' name='slno' value=$slnol checked></td>";
echo"<td>";
echo"<input type='text' name='newname'  style='color:white;font-size:15px;background-color:lightgreen;'>";
echo"</td>";
echo"<td>";
echo"<input type='text' name='newarea'  style='color:white;font-size:15px;background-color:lightgreen;'>";
echo"</td>";
echo"<td>";
echo"<input type='text' name='newdistrict'  style='color:white;font-size:15px;background-color:lightgreen;'>";
echo"</td>";
echo"<td>";
echo"<input type='text' name='newanimals'  style='color:white;font-size:15px;background-color:lightgreen;'>";
echo"</td>";
echo"<td>";
echo"<input type='text' name='newprotectionact' style='color:white;font-size:15px;background-color:lightgreen;'>";
echo"</td>";
echo"<td><input type='submit' value='  add   ' style='color:white;font-size:15px;background-color:green;'></td>";
echo"</form>";
echo"<form action='forward.php'>";
echo"<td bgcolor='black'><input type='hidden' name='slno' value=$slnol checked></td>";
echo"<td><input type='submit' value=' clear ' style='color:white;font-size:15px;background-color:green;'></td>";
echo"</form>";
echo"</tr>";
echo"</table><br><br><h1><font color='red'>VOLENTEER LIST</font></h1>"; 


echo"<table border='1' bgcolor='pink' cellpadding='3px'>";
echo"<tr bgcolor='pink'>
<th><font color='blue'><h3>Name of sanctuaries</center></h3></font></th>
<th><font color='blue'><h3>Name of volenteers</center></h3></font></th>
</tr>";

$data="SELECT * FROM forestdata";
$val=mysqli_query($con,$data); 
while(list($slno,$name,$area,$district,$animals,$protectionact,$status,$datetime,$time)=mysqli_fetch_array($val))
{
	echo"<tr><td>$name</td>";
	echo"<td>";
	$da="SELECT * FROM plantation WHERE fname='$name'";
	$dc=mysqli_query($con,$da);
	echo"<table>";
	while(list($uname,$fname)=mysqli_fetch_array($dc))
	{	
	echo"<tr border='1'><td>";
		echo($uname);
		echo"</td></tr>";
		}echo"</table>";
	echo"</td>";
}
echo"</body></center></html>";
mysqli_close($con);
			
			
			
			
			
			
		    }
		}
		else
		{
			if($cat=="worker")
			{
				header('Location:worker.html');
			}		
			else
			{
				if($cat=="public")
				{ echo"<font color='blue'><h2>USER NAME :  $name</h2></font>";
					$count=1;
$con=mysqli_connect("localhost","root","","forest") or die(mysqli_error());
$data="SELECT * FROM forestdata";
$val=mysqli_query($con,$data); 
echo"<center><body bgcolor='lightblue'>";
echo"<center><h1><font color='red'>LIST OF WILDLIFE SANCTURIES, BIRDS SANCTURIES AND NATIONAL PARKS IN TAMILNADU</font></h1></center>";
echo"<table border='1' bgcolor='pink' cellpadding='4px'>";
echo"<tr bgcolor='lightgreen'>
<th><font color='blue'><h3>Sl.<br>No.</h3></font></th>
<th><font color='blue'><h3>Name of the Wildlife Santury</h3></font></th>
<th><font color='blue'><h3>Area in ha</h3></font></th>
<th><font color='blue'><h3>District</h3></font></th>
<th><font color='blue'><h3>Major animals found</h3></font></th>
<th><font color='blue'><h3>Wildlife protection Act in which declablue</h3></font></th>
<th colspan='4'><font color='blue'><h3>plantation volenteers<br>registeration</h3></font></th></tr>";
while(list($slno,$fname,$area,$district,$animals,$protectionact,$status,$datetime,$date)=mysqli_fetch_array($val))
{
echo"<tr>"; 
echo"<td>".$count."</td>";
echo"<td>".$fname."</td>";
echo"<td>".$area."</td>";
echo"<td>".$district."</td>";
echo"<td>".$animals."</td>";
echo"<td>".$protectionact."</td>";
if($status=='yes')
{	

	$con=mysqli_connect("localhost","root","","forest") or die(mysqli_error());
$da="SELECT * FROM plantation WHERE fname='$fname' && name='$name'";
$dc=mysqli_query($con,$da);
$countr=0;
while(list($uname,$fname)=mysqli_fetch_array($dc))
{
	$countr+=1;
}



if($countr==1)
{
	echo"<td colspan='3'><form action='delregi.php'>
		<input type='radio' name='slno' value='$slno' checked>".$datetime."<br>";
	echo"<input type='radio' name='name' value='$name' checked>".$date."</td>";
	
	echo"<td>
		<input type='submit' value='Unregister' style='color:black;font-size:15px;background-color:red;' >
		</form></td>";
}
else
{
	echo"<td colspan='3'><form action='regi.php'>
		<input type='radio' name='slno' value='$slno' checked>".$datetime."<br>";
	echo"<input type='radio' name='name' value='$name' checked>".$date."</td>";
	
	echo"<td>
		<input type='submit' value='register' style='color:black;font-size:15px;background-color:lightgreen;'>
		</form></td>";
		
}	
}
else{
	echo"<td colspan='4'><p><center>No<br> plantation announcements</center></p></td>";
}
echo"</tr>";
$count+=1;
} 
echo"</table>"; 
echo"</body></center>";
mysqli_close($con);
				}
				else
					header('Location:home.php');
			}
		}
		
	}
	else
		header('Location:home.php');
	}
else
  if($cat!="admin")
	{if($password=="rajramraksuspro019")
		$password="r.................";
	$sql="INSERT INTO login(name,age,email,mobileno,password,status,date,time) VALUES('$name','$age','$email','$mobileno','$password','$cat','$date','$time')";
	mysqli_query($conn,$sql);
	header('Location:home.php');
	}
  else
    if($password=="rajramraksuspro019")
		{
		$dup="r.................";
		$sql="INSERT INTO login(name,age,email,mobileno,password,status,date,time) VALUES('$name','$age','$email','$mobileno','$dup','$cat','$date','$time')";
		mysqli_query($conn,$sql);
		header('Location:home.php');
		}
	else
		header('Location:home.php');
?>