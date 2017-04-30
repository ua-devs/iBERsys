<?php

      //initialize database
      include 'dbconfig.php';
		
		global $graduates;
		
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
		<li><a href="graduatesform.php">Back</a></li>
	</ul>
 <div class="center">
                <table class="table table-striped table-bordered">
                  <thead>
				  <legend></legend>
                    <tr>
                      <th>studentID</th>
                      <th>Last</th>
                      <th>First</th>
                      <th>Middle</th>
                      <th>Ext</th>
                      <th>Gender</th>
                      <th>Program</th>
                      <th>Major</th>
                      <th>AYGraduated</th>
                      <th>TermGraduated</th>
                      <th>GraduationDate</th> 
					  <th>DiplomaSerial</th>
                      <th>Graduated</th> 
					  <th>GPT</th> 
                    </tr>
                  </thead>
				  <?php 
                        $connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
						$db = mysql_select_db("ibersys", $connection); // Selecting Database
						//MySQL Query to read data
						$query = mysql_query("select * from Graduates", $connection);
						while ($row = mysql_fetch_array($query)) {
                                echo '<tr>';
                                echo '<td>'. $row['studentID'] . '</td>';
                                echo '<td>'. $row['Last'] . '</td>';
                                echo '<td>'. $row['First'] . '</td>';
                                echo '<td>'. $row['Middle'] . '</td>';
                                echo '<td>'. $row['Ext'] . '</td>';
                                echo '<td>'. $row['Gender'] . '</td>';
                                echo '<td>'. $row['Program'] . '</td>';
                                echo '<td>'. $row['Major'] . '</td>';
                                echo '<td>'. $row['AYGraduated'] . '</td>';
                                echo '<td>'. $row['TermGraduated'] . '</td>';
                                echo '<td>'. $row['GraduationDate'] . '</td>';
								echo '<td>'. $row['DiplomaSerial'] . '</td>';
                                echo '<td>'. $row['Graduated'] . '</td>';
                                echo '<td>'. $row['GPT'] . '</td>'; 								
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
