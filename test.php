<?php 

$db='franklin_univ';
$comm_error='Couldnot connect';

if(!@mysql_connect('localhost','root','zxcv123') || !@mysql_select_db($db)){
die($comm_error);
}

?>



<!DOCTYPE html>
<html>
<head>
<title>Franklin University</title>
</head>
<body>
<center><br><img src="logo.jpg" alt="logo Image" /></br>
<h1>FRANKLIN UNIVERSITY</h1>
<h2 style="color:green;">HOMEPAGE</h2>
</center>
<br> <a href="1.php" target="_self" >Enroll New Student</a><br>
<br><a href="2.php" target="_self" >Assign courses to student</a><br>
<br><a href="3.php" target="_self" >Assign course grades</a><br>
<br><a href="4.php" target="_self" >Graduation results</a><br>


</center>
<br>
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
<br><br>
<tr bgcolor="#a8d6e0">
    <td id="footer" align="center" class="footer_txt">&copy; Copyright  @Wing,Franklin University </td>
  </tr>
</table>

</body>
</html>
