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
$vk="insert into course_offer values("."'".$_POST['cid']."'".",".$_POST['grades'].",".$_POST['dno'].",".$_POST['id'].");";
$result = mysqli_query($con,$vk);
echo "<center>"."Query :".$vk."</center>";
/*while($row = mysqli_fetch_array($result)) {
  echo $row[0] . " " . $row[2];
  echo "<br>";
}
*/
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
