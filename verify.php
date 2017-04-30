
<?php 
		if(isset($_POST['submit'])){ 
		$dbHost = "localhost";        //Location Of Database usually its localhost 
		$dbUser = "root";            //Database User Name 
		$dbPass = "";            //Database Password 
		$dbDatabase = "ibersys";    //Database Name 
     
		$db = mysql_connect($dbHost,$dbUser,$dbPass)or die("Error connecting to database."); 
		//Connect to the databasse 
		mysql_select_db($dbDatabase, $db)or die("Couldn't select the database."); 
		//Selects the database 
		$usr = mysql_real_escape_string($_POST['username']); 
		$pas = mysql_real_escape_string($_POST['password']); 
		$sql = mysql_query("SELECT * FROM users 
		WHERE username='$usr' AND 
		password='$pas' 
		LIMIT 1"); 
		if(mysql_num_rows($sql) == 1){ 
			$row = mysql_fetch_array($sql); 
			session_start(); 
			$_SESSION['username'] = $row['username']; 
			$_SESSION['password'] = $row['password']; 
			$_SESSION['logged'] = TRUE; 
			header("Location: userpage.php");
			exit; 
		}
		else{ 
			header("Location: login_page.php"); 
			exit; 
		} 
	}
	else{
    //If the form button wasn't submitted go to the index page, or login page 
    header("Location: log_in.php");     
    exit; 
	} 
?>