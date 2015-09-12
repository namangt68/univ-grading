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
$con=mysqli_connect("localhost","root","zxcv123","frankline_university");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$vk="update course_offer set grades=".$_POST['grades']." where id ="."'".$_POST['id']."'"." and "."cid=".$_POST['cid'].";";
$result = mysqli_query($con,$vk);
echo $vk;
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
