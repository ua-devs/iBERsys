<?php

      //initialize database
      include 'dbconfig.php';
		
		global $Programs;
		
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
		<li><a href="testprogdesign.php">Back</a></li>
	</ul>
 <div class="center">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>ProgID</th>
                      <th>ProgCode</th>
                      <th>ProgramName</th>
                      <th>College</th>
                      <th>Campus</th>
                      <th>DU</th>
                      <th>Priority</th>
                      <th>Level</th>
                      <th>withBoard</th>
                      <th>withMajor</th>
                    </tr>
                  </thead>
				  <?php 
                        $connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
						$db = mysql_select_db("ibersys", $connection); // Selecting Database
						//MySQL Query to read data
						$query = mysql_query("select * from Programs", $connection);
						while ($row = mysql_fetch_array($query)) {
                                echo '<tr>';
                                echo '<td>'. $row['ProgID'] . '</td>';
                                echo '<td>'. $row['ProgCode'] . '</td>';
                                echo '<td>'. $row['ProgramName'] . '</td>';
                                echo '<td>'. $row['College'] . '</td>';
                                echo '<td>'. $row['Campus'] . '</td>';
                                echo '<td>'. $row['DU'] . '</td>';
                                echo '<td>'. $row['Priority'] . '</td>';
                                echo '<td>'. $row['Level'] . '</td>';
                                echo '<td>'. $row['withBoard'] . '</td>';
                                echo '<td>'. $row['withMajor'] . '</td>';
                                echo '</tr>';
							}

                            Database::disconnect();
                      ?>
                  </tbody>
            </table>
        </div>
        <div>
          <p align="center"> JPV and ITKenyo &copy; 2014</p>
        </div>
    </div> <!-- /container -->
  </body>
</html>
