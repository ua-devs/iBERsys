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
					<li><a href="result.php">View Table Result</a></li>
				</ul>
		</div>
		
            <p style="text-align:center"><img src = ""/></p>
						<form action="insertresult.php"  method="post">	
							<select class="select" name="ProgID">                      					  
								<option value="">Select Programs: </option>				  
								<?php 
									$pdo1 = Database::connect();
									$qprograms = 'SELECT ProgID FROM `Programs`';
								
									foreach ($pdo1->query($qprograms ) as $row1) {
										echo '<option value="'.$row1['ProgID'].'">'.$row1['ProgID'].'</option>';
									}
									Database::disconnect();
								?>
							</select>
							<br/><br/><br/>
							
								<td>ExamDate : </td>
								<td> <input type="date" size="12" maxlength="40"  name="ExamDate"/></td>

								<td>ReleaseDate : </td>
								<td> <input type="date" size="12" maxlength="40"  name="ReleaseDate"/></td><br/><br/><br/>

							
							PassNat:<input type="PassNat" size = "16" maxlength= "50"  name="PassNat"/>
							
                            TakeNat:<input type="TakeNat" size = "16" maxlength= "50"  name="TakeNat"/>
							
                            PassFirst:<input type="PassFirst" size = "16" maxlength= "50"  name="PassFirst"/><br/><br/><br/>
							
                            FailFirst:<input type="FailFirst" size = "16" maxlength= "50"  name="FailFirst"/>
							
                            CondFirst:<input type="CondFirst" size = "16" maxlength= "50"  name="CondFirst"/>
							
                            PassRetake:<input type="PassRetake" size = "16" maxlength= "50"  name="PassRetake"/><br/><br/><br/>
							
                            FailRetake:<input type="FailRetake" size = "16" maxlength= "50"  name="FailRetake"/>
							
                            CondRetake:<input type="CondRetake" size = "16" maxlength= "50"  name="CondRetake"/>

							<input class="btn btn-success" style="vertical-align: top" type="submit" value="submit" name="submit">

							</p>
							</div>
						<br/><br/><br/>
						<legend></legend>
					<td><div align="center"><address> &copy; University of Antique, 2014</</address>
					<legend></legend>
			</div>
	</body>
</html>   