<html>
	<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
	<ul class="nav nav-tabs">
		<li class="active"><a href="Home.php">Home</a></li>
		<li><a href="graduatesform.php">Back</a></li>
	</ul>
<?php
$con= mysql_connect("localhost","root","");

if(!$con){
   die("could not connect: ". mysql_error());
}
mysql_select_db("ibersys",$con);

	if(isset($_POST['checkGraduated']) && $_POST['checkGraduated'] == '1')
		{ $valGraduated=1; } else
		{ $valGraduated=0;}
	
	if(isset($_POST['checkGPT']) && $_POST['checkGPT'] == '1')
		{ $valGPT=1; } else
		{ $valGPT=0;}
$sql="INSERT INTO Graduates (studentID , Last, First, Middle, Ext, Gender, Program, Major, AYGraduated, TermGraduated, GraduationDate, DiplomaSerial, Graduated, GPT) 
VALUES
('$_POST[studentID]',
'$_POST[Last]',
'$_POST[First]',
'$_POST[Middle]',
'$_POST[Ext]',
'$_POST[Gender]',
'$_POST[Program]',
'$_POST[Major]',
'$_POST[AYGraduated]',
'$_POST[GraduationDate]',
'$_POST[AYGraduated]',
'$_POST[DiplomaSerial]',
'$valGraduated',
'$valGPT')";
if(!mysql_query($sql,$con)){
  die("ERROR: ".mysql_error());
}
echo "1 record added";

mysql_close($con);
?>
</body>
</html>
