 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<link   href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
    </head>
        <body style= "background: #D1D0CE">
        <h1 style= "text-align: center; font-family: Garamond; color: brown">Data Entry</h1><br />
		<legend></legend>
			<ul class="nav nav-tabs">
			<li class="active"><a href="Home.php">Home</a></li>
			<li><a href="InsertTerm.php">Back</a></li>
			<li><a href="viewcampus.php">View Table Campus</a></li>
		</ul>

            <form action="Insertcampus1.php"  method="post">
			
                 Insert ID Number:<input type="ID" size = "16" maxlength= "50"  name="ID"/>

				Campus Name:<input type="CampusName" size = "16" maxlength= "50"  name="CampusName"/><br><br>
				
			<input class="btn btn-success" style="vertical-align: top" type="submit" value="submit" name="submit">
			
			<legend></legend>
		<td colspan= 3 height="6%"><div align="center"><address>&copy; University of Antique, 2014</address></div>
		<legend></legend>
        </form>
        </body>
</html>   