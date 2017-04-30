<?php
    //initialize database
    include 'dbconfig.php';
?>

<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
	<body style= "background: #D1D0CE">
		<div stule=" background: #FFFFFF" >
			<td id="title" colspan=1 bgcolor="sky blue">
			<tr style="border: 1px">
				<h1 style= "text-align: center; font-family: Garamond; color: black">Data Entry</h1><br />
			</tr>
			</td>
			<ul class="nav nav-tabs">
				<li class="active"><a href="Home.php">Home</a></li>
				<li><a href="InsertTerm.php">Back</a></li>
				<li><a href="graduates.php">View Table Graduates</a></li>
			</ul>
		</div>
            <p style="text-align:center"><img src = ""/></p>
						<form action="insertgrad.php"  method="post">
                            Student ID:<input type="studentID" size = "16" maxlength= "50"  name="studentID"/>
							
							Last Name:<input type="Last" size = "16" maxlength= "50"  name="Last"/>
							
							First Name:<input type="First" size = "16" maxlength= "50"  name="First"/><br/><br/><br/>
						
							Middle Name:<input type="Middle" size = "16" maxlength= "50"  name="Middle"/>
							
							Ext Name, Jr/Sr:<input type="Ext" size = "16" maxlength= "50"  name="Ext"/>
							
							Gender:<input type="Gender" size = "16" maxlength= "50"  name="Gender"/><br/><br/><br/>
							
							Program:<input type="Program" size = "16" maxlength= "50"  name="Program"/>
							
							Major:<input type="Major" size = "16" maxlength= "50"  name="Major"/>
							
							AYGraduated:<input type="AYGraduated" size = "16" maxlength= "50"  name="AYGraduated"/><br/><br/><br/>
							
							Term Graduated:<input type="TermGraduated" size = "16" maxlength= "50"  name="TermGraduated"/>
							
							<td>Graduation Date: </td>
							<td><input type="Date" size = "12" maxlength= "40"  name="GraduationDate"/></td><br/><br/><br/>
							
							Diploma Serial:<input type="DiplomaSerial" size = "16" maxlength= "50"  name="DiplomaSerial"/>
							
							Graduated:<input type="checkbox" name="checkGraduated" value="1"/>
							
							GPT:<input type="checkbox" name="checkGPT" value="1"/><br/><br/>

							<input class="btn btn-success" style="vertical-align: top" type="submit" value="submit" name="submit">
						</p>
						</div>
						<legend></legend>
		<td colspan= 3 height="10%"><div align="center"><address>  University of Antique, 2014</address> </div>
		<legend></legend>
	</body>
</html>   