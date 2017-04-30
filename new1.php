<?php

      //initialize database
      include 'dbconfig.php';
		
		global $varDU, $varDate;
		
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 <td valign="top">
	
		<button><a href="index.php"><font size=color="black">Home</font></a></button>
		<button><a href="yearly.php"><font size=color="black">Yearly</font></a></button>
		<button><a href="quarter.php"><font size=color="black">Quarter</font></a></button>
		<button><a href="new.php"><font size=color="black">Insert Data</font></a></button>
 </td>
<body>
    <div class="container">
            <div class="row">
                <h3>UA Information on Board Examination Results System</h3>
            </div>
            <div class="row>">
            
                        
                    <form method="post" action="new.php">
                    
                      <select class="select" name="DU">                      
                      <option value="">Select Delivery Unit: </option>

                      <?php
                            $pdo1 = Database::connect();

                            $sql1 = 'SELECT DISTINCT DU FROM `programs`';
                            
                            foreach ($pdo1->query($sql1) as $row1) {

                              echo '<option value="' . $row1['DU'] . '">' . $row1['DU'] . '</option>
                              ';
                            }
                            
                            Database::disconnect();
                      ?>
                      
                      </select>

                      <select name="YearDate">                      
                      <option value="">Select Year: </option>

                      <?php
                    
                            
                            $pdo2 = Database::connect();

                            $sql2 = 'SELECT DISTINCT YEAR(ExamDate) AS YearDate FROM `result` WHERE ExamDate IS NOT NULL';
                            foreach ($pdo2->query($sql2) as $row2) {

                              echo '<option value="' . $row2['YearDate'] . '">' . $row2['YearDate'] . '</option>
                              ';
                              

                            }
                            Database::disconnect();


                    ?>
                    </select>
                    <input class="btn btn-success" style="vertical-align: top" type="submit" value="submit" name="submit">
                    </form>
                
            </div>


            <div class="row">




                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>ProgCode</th>
                      <th>PFT</th>
                      <th>TFT</th>
                      <th>UAFT</th>
                      <th>PR</th>
                      <th>TR</th>
                      <th>UAR</th>
                      <th>OAP</th>
                      <th>OAT</th>
                      <th>OA</th>
                      <th>PN</th>
                      <th>TN</th>
                      <th>N</th>
                      <th>UAFTP</th>
                      <th>UAOAP</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  
                    <?php 
                          if (isset($_POST['submit'])) {
                                 //initialize variables


                                $varDate = $_POST['YearDate'];
                                $varDU = $_POST['DU'];

                    if ($varDate != "" AND $varDU != ""){
                            $pdo3 = Database::connect();

                            $sql3 = "SELECT Programs.ProgCode, Sum(Result.PassFirst) AS PFT, Sum(Result.PassFirst+Result.FailFirst+Result.CondFirst) AS TFT, Round((Sum(Result.PassFirst)/Sum(Result.PassFirst+Result.FailFirst+Result.CondFirst))*100, 2) AS UAFT, Sum(Result.PassRetake) AS PR, Sum(Result.PassRetake+Result.FailRetake+Result.CondRetake) AS TR, Round((Sum(Result.PassRetake)/Sum(Result.PassRetake+Result.FailRetake+Result.CondRetake))*100, 2) AS UAR, Sum(Result.PassFirst)+Sum(Result.PassRetake) AS OAP, Sum(Result.PassFirst+Result.FailFirst+Result.CondFirst)+Sum(Result.PassRetake+Result.FailRetake+Result.CondRetake) AS OAT, Round(((Sum(Result.PassFirst)+Sum(Result.PassRetake))/(Sum(Result.PassFirst+Result.FailFirst+Result.CondFirst)+Sum(Result.PassRetake+Result.FailRetake+Result.CondRetake)))*100, 2) AS OA, Sum(Result.PassNat) AS PN, Sum(Result.TakeNat) AS TN, Round((Sum(Result.PassNat)/Sum(Result.TakeNat))*100, 2) AS N, Round(((Sum(Result.PassFirst)/Sum(Result.PassFirst+Result.FailFirst+Result.CondFirst))/(Sum(Result.PassNat)/Sum(Result.TakeNat)))*100, 2) AS UAFTP, Round((((Sum(Result.PassFirst)+Sum(Result.PassRetake))/(Sum(Result.PassFirst+Result.FailFirst+Result.CondFirst)+Sum(Result.PassRetake+Result.FailRetake+Result.CondRetake)))/((Sum(Result.PassNat)/Sum(Result.TakeNat))))*100, 2) AS UAOAP FROM (College INNER JOIN Programs ON College.CollegeID = Programs.College) INNER JOIN Result ON Programs.ProgID = Result.ProgramID WHERE Programs.DU= '$varDU' AND YEAR(Result.ExamDate) = $varDate";
                            //if (is_($sql3)){
                            foreach ($pdo3->query($sql3) as $row3) {
                                echo '<tr>';
                                echo '<td>'. $row3['ProgCode'] . '</td>';
                                echo '<td>'. $row3['PFT'] . '</td>';
                                echo '<td>'. $row3['TFT'] . '</td>';
                                echo '<td>'. $row3['UAFT'] . '%</td>';
                                echo '<td>'. $row3['PR'] . '</td>';
                                echo '<td>'. $row3['TR'] . '</td>';
                                echo '<td>'. $row3['UAR'] . '%</td>';
                                echo '<td>'. $row3['OAP'] . '</td>';
                                echo '<td>'. $row3['OAT'] . '</td>';
                                echo '<td>'. $row3['OA'] . '%</td>';
                                echo '<td>'. $row3['PN'] . '</td>';
                                echo '<td>'. $row3['TN'] . '</td>';
                                echo '<td>'. $row3['N'] . '</td>';
                                echo '<td>'. $row3['UAFTP'] . '%</td>';
                                echo '<td>'. $row3['UAOAP'] . '%</td>';      
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
          <p align="center"> JPV and ITKenyo &copy; 2014</p>
        </div>
    </div> <!-- /container -->
  </body>
</html>