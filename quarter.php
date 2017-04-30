<?php

      //initialize database
      include 'dbconfig.php';
		
		global $varDate;
		
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
		<li><a href="du.php">By DU</a></li>
		<li><a href="yearly.php">By Year</a></li>
		<li><a href="quarter.php">By Quarter</a></li>
	</ul>
<body>
    <div class="container">
            <div align="center">
                <h3>UA Information on Board Examination Results System</h3>
            </div>
            <div class="row>">
            
                        
                    <form method="post" action="quarter.php">
                    
                      <select name="YearDate">                      					  
                      <option value="">Select Year: </option>
					  
                      <?php 
                            $pdo1 = Database::connect();

                            $sql1 = 'SELECT DISTINCT YEAR(ExamDate) AS YearDate FROM `result` WHERE ExamDate IS NOT NULL';
                            
                            foreach ($pdo1->query($sql1) as $row1) {

                              echo '<option value="' . $row1['YearDate'] . '">' . $row1['YearDate'] . '</option>';
							  
                            }
                            
                            Database::disconnect();
							
                      ?>
                      
                      </select>
					  
                    <input class="btn btn-success" style="vertical-align: top" type="submit" value="submit" name="submit">
                    </form>
                
            </div>


            <div class="row">




                <table class="table table-striped table-bordered">
				<legend></legend>
                  <thead>
                    <tr>
                      <th rowspan=2>Quarter</th>
                      <th colspan=3>PFT</th>
                      <th colspan=3>Re-Takers</th>
                      <th colspan=3>Total UA Takers</th>
                      <th colspan=3>National Takers</th>
                      <th colspan=2>UA Performance</th>
                    </tr>
					<tr>                      
                      <th>Pass</th>
                      <th>Takers</th>
                      <th>%</th>
                      <th>Pass</th>
                      <th>Takers</th>
                      <th>%</th>
                      <th>Pass</th>
                      <th>Takers</th>
                      <th>%</th>
                      <th>Pass</th>
                      <th>Takers</th>
                      <th>%</th>
                      <th>First Time</th>
                      <th>Over all</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  
                    <?php 
                          if (isset($_POST['submit'])) {
                                 //initialize variables


                                $varDate= $_POST['YearDate'];
                    if ($varDate!= ""){
                            $pdo2 = Database::connect();

                            $sql2 = "SELECT QUARTER(Result.ExamDate) as QTR, Sum(Result.PassFirst) AS PFT, Sum(Result.PassFirst+Result.FailFirst+Result.CondFirst) AS TFT, Round((Sum(Result.PassFirst)/Sum(Result.PassFirst+Result.FailFirst+Result.CondFirst))*100, 2) AS UAFT, Sum(Result.PassRetake) AS PR, Sum(Result.PassRetake+Result.FailRetake+Result.CondRetake) AS TR, Round((Sum(Result.PassRetake)/Sum(Result.PassRetake+Result.FailRetake+Result.CondRetake))*100, 2) AS UAR, Sum(Result.PassFirst)+Sum(Result.PassRetake) AS OAP, Sum(Result.PassFirst+Result.FailFirst+Result.CondFirst)+Sum(Result.PassRetake+Result.FailRetake+Result.CondRetake) AS OAT, Round(((Sum(Result.PassFirst)+Sum(Result.PassRetake))/(Sum(Result.PassFirst+Result.FailFirst+Result.CondFirst)+Sum(Result.PassRetake+Result.FailRetake+Result.CondRetake)))*100, 2) AS OA, Sum(Result.PassNat) AS PN, Sum(Result.TakeNat) AS TN, Round((Sum(Result.PassNat)/Sum(Result.TakeNat))*100, 2) AS N, Round(((Sum(Result.PassFirst)/Sum(Result.PassFirst+Result.FailFirst+Result.CondFirst))/(Sum(Result.PassNat)/Sum(Result.TakeNat)))*100, 2) AS UAFTP, Round((((Sum(Result.PassFirst)+Sum(Result.PassRetake))/(Sum(Result.PassFirst+Result.FailFirst+Result.CondFirst)+Sum(Result.PassRetake+Result.FailRetake+Result.CondRetake)))/((Sum(Result.PassNat)/Sum(Result.TakeNat))))*100, 2) AS UAOAP FROM (College INNER JOIN Programs ON College.CollegeID = Programs.College) INNER JOIN Result ON Programs.ProgID = Result.ProgID WHERE YEAR(Result.ExamDate) = $varDate GROUP BY QUARTER(Result.ExamDate)";
                            //if (is_($sql2)){
                            foreach ($pdo2->query($sql2) as $row2) {
                                echo '<tr>';
								echo '<td>'. $row2['QTR'] . '</td>';
                                echo '<td>'. $row2['PFT'] . '</td>';
                                echo '<td>'. $row2['TFT'] . '</td>';
                                echo '<td>'. $row2['UAFT'] . '%</td>';
                                echo '<td>'. $row2['PR'] . '</td>';
                                echo '<td>'. $row2['TR'] . '</td>';
                                echo '<td>'. $row2['UAR'] . '%</td>';
                                echo '<td>'. $row2['OAP'] . '</td>';
                                echo '<td>'. $row2['OAT'] . '</td>';
                                echo '<td>'. $row2['OA'] . '%</td>';
                                echo '<td>'. $row2['PN'] . '</td>';
                                echo '<td>'. $row2['TN'] . '</td>';
                                echo '<td>'. $row2['N'] . '</td>';
                                echo '<td>'. $row2['UAFTP'] . '%</td>';
                                echo '<td>'. $row2['UAOAP'] . '%</td>';      
                                echo '</tr>';
                            //}
                            }

                             Database::disconnect();
                           }
                          }
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