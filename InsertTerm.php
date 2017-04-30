 <!DOCTYPE html>

<html>
	<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
	</head>
		
        <title> Add Data In Term Table </title>
        <script type="text/javascript" src="script.js"></script>
        <body style= "background: #D1D0CE">
        <h1 style= "text-align: center; font-family: Garamond; color: brown"> Data Entry</h1><br />
		<legend></legend>
		<ul class="nav nav-tabs">
			<li class="active"><a href="Home.php">Home</a></li>
			<li><a href="testprogdesign.php">Programs</a></li>
			<li><a href="testresult.php">Result</a></li>
			<li><a href="graduatesform.php">Graduates</a></li>
			<li><a href="insertcollege.php">College</a></li>
			<li><a href="insertcampus.php">Campus</a></li>
			<li><a href="insertlevel.php">Level</a></li>
			<li><a href="viewterm.php">View Table Term</a></li>
		</ul>
          <p style="text-align:center"><img src = ""/></p>
            <form action="InsertTerm1.php"  method="post">
                    Insert ID Number:<input type="ID" size = "16" maxlength= "50"  name="ID"/>
					Description:<input type="Description" size = "16" maxlength= "50"  name="Description"/><br /><br />
					<input class="btn btn-success" style="vertical-align: top" type="submit" value="submit" name="submit">
				</form>
				<legend></legend>
			<td colspan= 3 height="10%"><div align="center"><address> &copy; University of Antique, 2014</address> </div>
			<legend></legend>
		</form>
    </body>
</html>   