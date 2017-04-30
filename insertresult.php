<html>
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
	</head>
<body>
<ul class="nav nav-tabs">
		<li class="active"><a href="Home.php">Home</a></li>
		<li><a href="testresult.php">Back</a></li>
	</ul>
<?php
$con= mysql_connect("localhost","root","");

if(!$con){
   die("could not connect: ". mysql_error());
}
mysql_select_db("ibersys",$con);
$sql="INSERT INTO Result (ProgID, ExamDate, ReleaseDate, PassNat, TakeNat, PassFirst, FailFirst, CondFirst, PassRetake, FailRetake, CondRetake) 
VALUES
('$_POST[ProgID]',
'$_POST[ExamDate]',
'$_POST[ReleaseDate]',
'$_POST[PassNat]',
'$_POST[TakeNat]',
'$_POST[PassFirst]',
'$_POST[FailFirst]',
'$_POST[CondFirst]',
'$_POST[PassRetake]',
'$_POST[FailRetake]',
'$_POST[CondRetake]')";
if(!mysql_query($sql,$con)){
  die("ERROR: ".mysql_error());
}
echo "1 record added";

mysql_close($con);
?>
</body>
</html>
