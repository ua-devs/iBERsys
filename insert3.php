<html>
<body>
 
 <td valign="top">
	<button><a href="Home.php"><font size=color="black">Home</font></a></button>
	<br><br/>
 </td>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("ibersys", $con);
 
$sql="INSERT INTO Term (ID, Description)
VALUES
('$_POST[ID]','$_POST[Description]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>
</body>
</html>