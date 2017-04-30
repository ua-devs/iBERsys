<?php

      //initialize database
      include 'dbconfig.php';
		
		global $result;
		
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<td>
	<legend></legend>
	<ul class="nav nav-tabs">
		<li class="active"><a href="Home.php">Home</a></li>
		<li><a href="testresult.php">Back</a></li>
	</ul>
 </td>
 <div class="center">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>ProgID</th>
                      <th>ExamDate</th>
					  <th>ReleaseDate</th>
                      <th>TakeNat</th>
                      <th>PassNat</th>
                      <th>FailFirst</th>
                      <th>PassFirst</th>
                      <th>CondFirst</th>
                      <th>PassRetake</th>
                      <th>FailRetake</th>
                      <th>CondRetake</th> 
                    </tr>
                  </thead>
				  <?php 
                        $connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
						$db = mysql_select_db("ibersys", $connection); // Selecting Database
						//MySQL Query to read data
						$query = mysql_query("select * from Result", $connection);
						while ($row = mysql_fetch_array($query)) {
                                echo '<tr>';
                                echo '<td>'. $row['ProgID'] . '</td>';
                                echo '<td>'. $row['ExamDate'] . '</td>';
								echo '<td>'. $row['ReleaseDate'] . '</td>';
                                echo '<td>'. $row['TakeNat'] . '%</td>';
                                echo '<td>'. $row['PassNat'] . '%</td>';
                                echo '<td>'. $row['FailFirst'] . '%</td>';
                                echo '<td>'. $row['PassFirst'] . '%</td>';
                                echo '<td>'. $row['CondFirst'] . '%</td>';
                                echo '<td>'. $row['PassRetake'] . '%</td>';
                                echo '<td>'. $row['FailRetake'] . '%</td>';
                                echo '<td>'. $row['CondRetake'] . '%</td>';  
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
