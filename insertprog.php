<html>
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
	</head>
<body>
	<ul class="nav nav-tabs">
		<li class="active"><a href="Home.php">Home</a></li>
		<li><a href="testprogdesign.php">Back</a></li>
	</ul>
<?php
$con= mysql_connect("localhost","root","");

if(!$con){
   die("could not connect: ". mysql_error());
}
mysql_select_db("ibersys",$con);

	if(isset($_POST['checkPriority']) && $_POST['checkPriority'] == '1')
		{ $valPriority=1; } else
		{ $valPriority=0;}

	if(isset($_POST['checkBoard']) && $_POST['checkBoard'] == '1')
        { $valBoard=1; } else
        { $valBoard=0;}
		
	if(isset($_POST['checkMajor']) && $_POST['checkMajor'] == '1')
        { $valMajor=1;
		} else
		{ $valMajor=0;
		}
		
$sql="INSERT INTO Programs (ProgID , ProgCode, ProgramName, College, Campus, DU, Priority, Level, withBoard, withMajor) 
VALUES
('$_POST[ProgID]',
'$_POST[ProgCode]',
'$_POST[ProgramName]',
'$_POST[College]',
'$_POST[Campus]',
'$_POST[DU]',
'$valPriority',
'$_POST[Level]',
'$valBoard',
'$valMajor')";


if(!mysql_query($sql,$con)){
  die("ERROR: ".mysql_error());
}
echo "1 record added";

mysql_close($con);
?>
</body>
</html>
