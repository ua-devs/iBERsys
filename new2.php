<?php

      //initialize database
      include 'dbconfig.php';	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
<td valign="top">
	
	<button><a href="new1.php"><font size=color="black">Home</font></a></button>
	<button><a href="new2.php"><font size=color="black">Test</font></a></button>
 </td>
<body>
    <div class="container">
            <div class="row">
                <h3>UA Information on Board Examination Results System</h3>
            </div>
			<form method="post" action="new1.php">
				<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
   Progcode: <input type="text" Progcode="PFT">
   <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // collect value of input field
     $Progcode = $_REQUEST['PFT'];
     if (empty($Progcode)) {
         echo "PFT is empty";
     } else {
         echo $Progcode;
     }
}
?>


          <p align="center"> JPV and ITKenyo &copy; 2014</p>
        </div>
    </div> <!-- /container -->
  </body>
</html>