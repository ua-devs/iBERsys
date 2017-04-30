<?php

      //initialize database
      include 'dbconfig.php';
		
		global $viewCampus;
		
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
	<ul class="nav nav-tabs">
		<li class="active"><a href="Home.php">Home</a></li>
		<li><a href="insertcampus.php">Back</a></li>
	</ul>
 <div class="center">

                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Campus Name</th>
                    </tr>
                  </thead>
				  <?php 
                        $connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
						$db = mysql_select_db("ibersys", $connection); // Selecting Database
						//MySQL Query to read data
						$query = mysql_query("select * from Campus", $connection);
						while ($row = mysql_fetch_array($query)) {
                                echo '<tr>';
                                echo '<td>'. $row['ID'] . '</td>';
                                echo '<td>'. $row['CampusName'] . '</td>';

                                echo '</tr>';
							}

                            Database::disconnect();
                      ?>
                  </tbody>
            </table>
        </div>
		<legend></legend>
          <p align="center"> JPV and ITKenyo &copy; 2014</p>
		  <legend></legend>
    </div> <!-- /container -->
  </body>
</html>