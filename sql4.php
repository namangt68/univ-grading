<!DOCTYPE html>
<html>
<head>
<title>Franklin University</title>
</head>
<body>
<center><br><img src="logo.jpg" alt="logo Image" /></br>
<h1>FRANKLIN UNIVERSITY</h1>


<h2 style="color:green;">STUDENT ENROLLMENT</h2>
<p style="text-align:right;" size="6"><a href="test.php" target="_self" >HOMEPAGE</a></p>
</center>



<?php
$con=mysqli_connect("localhost","root","zxcv123","franklin_univ");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//echo $_POST['ID'];
$vk="select * from course_offer where id ="."'".$_POST['id']."'".";";
$vk1="select dno from student where id ="."'".$_POST['id']."'".";";
$vk2="select * from course where cid ="."150".";";
$vk3="select * from course where cid ="."161".";";

echo $vk1;
$result = mysqli_query($con,$vk);
$result1 = mysqli_query($con,$vk1);
$result2 = mysqli_query($con,$vk2);
$result3 = mysqli_query($con,$vk3);
$row1= mysqli_fetch_array($result1);
$row2= mysqli_fetch_array($result2);
$row3= mysqli_fetch_array($result3);
echo $row1[0];
$i=$j=$k=0;
while($row = mysqli_fetch_array($result)) {
 // echo $row[0];
 // echo "<br>";
  if($row[3]>"4"){
   $i++;
    }
  echo "yi";
$j++;
}
//echo $i." ".$j;
if($i==$j){ 
echo "<h2>"."<u>"."<center>"."<br>"."GRADUATED SUCCESSFULLY"."</center>"."</u>"."</h2>"; }
else 
echo "<h2>"."<u>"."<center>"."<br>"."FAILED"."</center>"."</u>"."</h2>";;
mysqli_close($con);
?> 

<br>
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">

<tr bgcolor="#a8d6e0 ">
    <td id="footer" align="center" class="footer_txt">&copy; Copyright @Wing,Franklin University </td>
  </tr>
</table>

</body>
</html>
