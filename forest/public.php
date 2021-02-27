<?php
$count=1;
$con=mysqli_connect("localhost","root","","forest") or die(mysqli_error());
$data="SELECT * FROM forestdata";
$val=mysqli_query($con,$data); 
echo"<center><body bgcolor='black'>";
echo"<center><h1><font color='red'>LIST OF WILDLIFE SANCTURIES, BIRDS SANCTURIES AND NATIONAL PARKS IN TAMILNADU</font></h1></center>";
echo"<table border='1' bgcolor='yellow' cellpadding='10px'>";
echo"<tr bgcolor='orange'>
<th><font color='blue'><h3>Sl.No.</h3></font></th>
<th><font color='blue'><h3>Name of the Wildlife Santury</h3></font></th>
<th><font color='blue'><h3>Area in ha</h3></font></th>
<th><font color='blue'><h3>District in which located</h3></font></th>
<th><font color='blue'><h3>Major animals found</h3></font></th>
<th><font color='blue'><h3>Wildlife protection Act in which declablue</h3></font></th></tr>";
while(list($slno,$name,$area,$district,$animals,$protectionact)=mysqli_fetch_array($val))
{
echo"<tr>"; 
echo"<td>".$count."</td>";
echo"<td>".$name."</td>";
echo"<td>".$area."</td>";
echo"<td>".$district."</td>";
echo"<td>".$animals."</td>";
echo"<td>".$protectionact."</td>";
echo"</tr>";
$count+=1;
} 
echo"</table>"; 
echo"</body></center>";
mysqli_close($con);
?>