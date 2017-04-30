 <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link   href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
    </head>
        <body style= "background: #D1D0CE">
        <h1 style= "text-align: center; font-family: Garamond; color: brown">Data Entry</h1><br />
			<ul class="nav nav-tabs">
			<li class="active"><a href="Home.php">Home</a></li>
			<li><a href="InsertTerm.php">Back</a></li>
			<li><a href="viewcollege.php">View Data</a></li>
		</ul>
		<p style="text-align:center"><img src = ""/></p>
            <form action="Insertcollege1.php"  method="post">
                    Insert College ID:<input type="CollegeID" size = "16" maxlength= "50"  name="CollegeID"/>
					 Description:<input type="CollegeName" size = "16" maxlength= "50"  name="CollegeName"/><br><br>
					<input class="btn btn-success" style="vertical-align: top" type="submit" value="submit" name="submit">
				</form>
				<legend></legend>
				<td colspan= 3 height="6%"><div align="center"><address> &copy; University of Antique, 2014</address> </div>
			<legend></legend>
			</form>
    </body>
</html>   