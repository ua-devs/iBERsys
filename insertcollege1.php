<html>
	<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<ul class="nav nav-tabs">
	<li class="active"><a href="Home.php">Home</a></li>
	<li><a href="insertcollege.php">Back</a></li>
</ul>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("ibersys", $con);

$sql="INSERT INTO College (CollegeID, CollegeName)
VALUES
('$_POST[CollegeID]','$_POST[CollegeName]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>
</body>
</html>
