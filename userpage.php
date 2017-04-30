<html>
<a href="Home.php">Home</a></li>
<body>
<?php 
session_start(); 
if(!$_SESSION['logged']){ 
    header("Location: .php"); 
    exit; 
} 
echo 'Welcome, '.$_SESSION['username']; 
?>
</body>
</html>
