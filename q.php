
<?php
require("phpsqlinfo_dbinfo.php");

// Gets data from URL parameters
$ID = $_GET['ID'];
$Description = $_GET['Description'];


// Opens a connection to a MySQL server
$connection=mysql_connect ("localhost", "root", "");
if (!$connection) {
  die('Not connected : ' . mysql_error());
}

// Set the active MySQL database
$db_selected = mysql_select_db("ibersys", $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

// Insert new row with user data
$query = sprintf("INSERT INTO Term " .
         " (ID, Description ) " .
         " VALUES (NULL, '%s', '%s');",
         mysql_real_escape_string($ID),
         mysql_real_escape_string($Description),

$result = mysql_query($query);

if (!$result) {
  die('Invalid query: ' . mysql_error());
}

?>