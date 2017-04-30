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
			<legend></legend>
			<ul class="nav nav-tabs">
				<li class="active"><a href="Home.php">Home</a></li>
				<li><a href="InsertTerm.php">Back</a></li>
				<li><a href="programs.php">View Data</a></li>
			</ul>
		</div>
		
            <p style="text-align:center"><img src = ""/></p>
						<form action="insertprog.php"  method="post">
                            ProgID:<input type="ProgID" size = "16" maxlength= "50"  name="ProgID"/>
							
							ProgCode:<input type="ProgCode" size = "16" maxlength= "50"  name="ProgCode"/>
							
							ProgramName:<input type="ProgramName" size = "16" maxlength= "50"  name="ProgramName"/><br/><br/><br/>
						
							<select class="select" name="College">                      					  
								<option value="">Select College: </option>
								<?php 
									$pdo1 = Database::connect();
									$qcollege = 'SELECT CollegeID FROM `College`';
								
									foreach ($pdo1->query($qcollege) as $row1) {
										echo '<option value="'.$row1['CollegeID'].'">'.$row1['CollegeID'].'</option>';
									}
									Database::disconnect();
								?>
							</select>						

							<select class="select" name="Campus">                      					  
								<option value="">Select Campus: </option>
								<?php 
									$pdo1 = Database::connect();
									$qcampus = 'SELECT ID FROM `Campus`';
								
									foreach ($pdo1->query($qcampus) as $row1) {
										echo '<option value="'.$row1['ID'].'">'.$row1['ID'].'</option>';
									}
									Database::disconnect();
								?>
							</select>
							
                            DU:<input type="DU" size = "16" maxlength= "50"  name="DU"/>
							
							Priority:<input type="checkbox" name="checkPriority" value="1"/>
							
							
							</p>
							</div>
							
							<select class="select" name="Level">                      					  
								<option value="">Select Level: </option>				  
								<?php 
									$pdo1 = Database::connect();
									$qlevel = 'SELECT LevelID FROM `Level`';
								
									foreach ($pdo1->query($qlevel) as $row1) {
										echo '<option value="'.$row1['LevelID'].'">'.$row1['LevelID'].'</option>';
									}
									Database::disconnect();
								?>
								
							</select>
							
							withBoard:<input type="checkbox" name="checkBoard" value="1"/>
							
							withMajor:<input type="checkbox" name="checkMajor" value="1"/><br/><br/>

							<input class="btn btn-success" style="vertical-align: top" type="submit" value="submit" name="submit">
						</p>
						</div>
						<legend></legend>
		<td colspan= 3 height="10%"><div align="center"><address>  &copy; University of Antique, 2014</address> </div>
		<legend></legend>
	</body>
</html>   