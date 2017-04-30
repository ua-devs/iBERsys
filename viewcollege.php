<?php

      //initialize database
      include 'dbconfig.php';
		
		global $viewterm;
		
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
	<ul class="nav nav-tabs">
		<li class="active"><a href="Home.php">Home</a></li>
		<li><a href="insertcollege.php">Back</a></li>
	</ul>
<body>

 
 <div class="center">

                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>CollegeID</th>
                      <th>Description</th>
                    </tr>
                  </thead>
				  <?php 
                        $connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
						$db = mysql_select_db("ibersys", $connection); // Selecting Database
						//MySQL Query to read data
						$query = mysql_query("select * from College", $connection);
						while ($row = mysql_fetch_array($query)) {
                                echo '<tr>';
                                echo '<td>'. $row['CollegeID'] . '</td>';
                                echo '<td>'. $row['CollegeName'] . '</td>';

                                echo '</tr>';
							}
                            Database::disconnect();
                      ?>
                  </tbody>
            </table>
        </div>
        <div>
		<legend></legend>
          <p align="center"> JPV and ITKenyo &copy; 2014</p>
		  <legend></legend>
        </div>
    </div> <!-- /container -->
  </body>
</html>